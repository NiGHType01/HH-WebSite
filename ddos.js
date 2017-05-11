// Define large flow as greater than 100Mbits/sec for 1 second or longer
var bytes_per_second = 100000000/8;
var duration_seconds = 1;

var idx = 0;

setFlow('udp_target',
 {keys:'ipdestination,udpsourceport',
  value:'bytes', filter:'direction=egress', t:duration_seconds}
);

setThreshold('attack',
 {metric:'udp_target', value:bytes_per_second, byFlow:true, timeout:2, 
  filter:{ifspeed:[1000000000]}}
);

setEventHandler(function(evt) {
 var agent = evt.agent;
 var ports = ofInterfaceToPort(agent);
 if(ports && ports.length == 1) {
  var dpid = ports[0].dpid;
  var id = "drop" + idx++;
  var k = evt.flowKey.split(',');
  var rule= {
   priority:500, idleTimeout:20, hardTimeout:3600,
   match:{dl_type:2048, nw_proto:17, nw_dst:k[0], tp_src:k[1]},
   actions:[]
  };
  setOfRule(dpid,id,rule);
 }
},['attack']);
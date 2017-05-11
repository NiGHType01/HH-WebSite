import requests
import json

groups = {'external':['0.0.0.0/0'],'internal':['10.0.0.0/8']}
flows = {'keys':'ipsource,ipdestination','value':'frames','filter':'stack=eth.ip.gre.ip.tcp&tcpdestinationport=22'}
threshold = {'metric':'watch','value':0}

rt = 'http://localhost:8008'

r = requests.put(rt + '/group/json',data=json.dumps(groups))
r = requests.put(rt + '/flow/watch/json',data=json.dumps(flows))
r = requests.put(rt + '/threshold/watch/json',data=json.dumps(threshold))

eventurl = rt + '/events/json?maxEvents=10&timeout=60'
eventID = -1
while 1 == 1:
  r = requests.get(eventurl + "&eventID=" + str(eventID))
  if r.status_code != 200: break
  events = r.json()
  if len(events) == 0: continue
  eventID = events[0]["eventID"]
  events.reverse()
  for e in events:
    thresholdID = e['thresholdID']
    if "watch" == thresholdID:
      r = requests.get(rt + '/metric/' + e['agent'] + '/' + e['dataSource'] + '.' + e['metric'] + '/json')
      metrics = r.json()
      if len(metrics) > 0:
        evtMetric = metrics[0]
        evtKeys = evtMetric.get('topKeys',None)
        if(evtKeys and len(evtKeys) > 0):
          topKey = evtKeys[0]
          key = topKey.get('key', None)
          value = topKey.get('value',None)
          keys = key.split(",")
          match = [
           {
             "ether-type":"2048",
             "ip-proto":"47",
             "src-ip": str(keys[0]),
             "src-ip-mask":"255.255.255.255",
             "dst-ip": str(keys[1]),
             "dst-ip-mask":"255.255.255.255",
             "src-tp-port":None,
             "dst-tp-port":None,
             "any-traffic":None
           }
          ]
          print match
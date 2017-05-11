import requests
import json

groups = {'external':['0.0.0.0/0'],'internal':['10.0.0.0/8']}
flows = {'keys':'ipsource,ipdestination','value':'frames','filter':'sourcegroup=external&destinationgroup=internal'}
threshold = {'metric':'incoming','value':1000}
target = 'http://localhost:8008'

r = requests.put(target + '/group/json',data=json.dumps(groups))
r = requests.put(target + '/flow/incoming/json',data=json.dumps(flows))
r = requests.put(target + '/threshold/incoming/json',data=json.dumps(threshold))

eventurl = target + '/events/json?maxEvents=10&timeout=60'
eventID = -1
while 1 == 1:
  r = requests.get(eventurl + '&eventID=' + str(eventID))
  if r.status_code != 200: break
  events = r.json()
  if len(events) == 0: continue

  eventID = events[0]["eventID"]
  for e in events:
    if 'incoming' == e['metric']:
      r = requests.get(target + '/metric/' + e['agent'] + '/' + e['dataSource'] + '.' + e['metric'] + '/json')
	  metric = r.json()
      if len(metric) > 0:
        print metric[0]["topKeys"][0]["key"]
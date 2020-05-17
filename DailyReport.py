import requests
import json
import csv

from_date = input("Enter Start:(yyyy-mm-dd)\n")
to = input("Enter End:(yyyy-mm-dd)\n")

name = input("press y for custom file name")
if name == 'y' or name == "Y":
    name = input("Enter Name")
else:
    name = from_date
r = requests.get('http://delsilentzone.000webhostapp.com/reportapi.php?today='+to+'&yest='+from_date)

json_data = json.loads(r.text)
print(json_data)

data_file = open(name+'.csv', 'w')
csv_writer = csv.writer(data_file)
csv_writer.writerow(['vehicle Number','count'])

for i in json_data.keys():
    csv_writer.writerow([i,json_data[i]])
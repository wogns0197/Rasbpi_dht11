import urllib.request

url = "http://localhost:8888/House/data/humidity"
name = "humidity.txt"

file = urllib.request.urlopen(url).read()

with open(name, mode="wb") as f:
	f.write(file)
	print("!!")

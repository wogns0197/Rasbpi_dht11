import urllib.request

url = "http://localhost:8888/House/data"
name = "humidity"

file = urllib.request.urlopen(url).read()

with opeon(name, mode="wb") as f:
	f.write(file)
	print("!!")

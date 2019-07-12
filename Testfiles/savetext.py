import os.path
import codecs
import sys
save_path = "data/"

Temp_data,Hum_data = sys.stdin.readline().split()

Temperature_Name = os.path.join(save_path, "temperature")
tf = codecs.open(Temperature_Name,'w','utf-8')
Humidity_Name = os.path.join(save_path, "humidity")
hf = codecs.open(Humidity_Name,'w','utf-8')

tf.write(Temp_data)
hf.write(Hum_data)

tf.close()
hf.close()
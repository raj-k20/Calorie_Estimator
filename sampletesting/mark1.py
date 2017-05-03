from os import walk
import time


from PIL import *
import Image

path = "/home/rajesh/Documents/imagess"

def my_range(start, end, step):
    while start <= end:
        yield start
        start += step

def rotate(image1,dp,name1):
	image = Image.open(image1)
	image.show
	color_to_find = (0,0,0,0)
	color_to_replace = (255,255,255,255)
        image = image.rotate(45)
        l = 0
        for x in my_range(45,315,45):
		rotated_image = image.rotate(x)
		new_image_data = []
		for i in list(rotated_image.getdata()):
			if i == color_to_find:
				new_image_data += [color_to_replace];
			else:
				new_image_data += [i];
		rotated_image.putdata(new_image_data);
		l = l + 1
		millis = int(round(time.time() * 1000))
		rotated_image.save(dp+'/'+'rotated_'+str(l)+name1,'JPEG'); 


prime = []
mega = []
for (dirpath, dirnames, filenames) in walk(path):
    for name in filenames:
	if name.endswith((".png",".jpg")):
		if "thumb" not in name:
			rotate(dirpath+"/"+name,dirpath,name)
 


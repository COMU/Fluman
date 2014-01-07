from BeautifulSoup import BeautifulSoup
from urllib2 import urlopen
from json import dumps

# needs python-beatifulsoup to run
# remember, no spaces.

html = urlopen("http://flume.apache.org/FlumeUserGuide.html")
soup = BeautifulSoup(html)
###########################################################################
sources = soup.find("div", {"id": "flume-sources"})
sources = sources.findAll("div", {"class": "section"})
###########################################################################
channels = soup.find("div", {"id": "flume-channels"})
channels = channels.findAll("div", {"class": "section"})
###########################################################################
sinks = soup.find("div", {"id": "flume-sinks"})
sinks = sinks.findAll("div", {"class": "section"})


whatisit = "sources"
results = {}
results.setdefault(whatisit,{})
for source in sources:
	try:
		table = source.find("table", {"class":"docutils"})
		table = table.find("tbody", {"valign":"top"})
		rows = table.findAll("tr")
		headerName = (source.find("a", {"class":"headerlink"})['href'][1:])
		results[whatisit].setdefault(str(headerName), {})
		for row in rows:
			try:
				col = row.findAll("td")
				req = 0
				if "strong" in str(col[0]):
					req = 1
				c1= str(col[0].find(text=True))
				c2= str(col[1].find(text=True))
				c3= str(col[2])[4:-5]
				###########################################################
				results[whatisit][headerName].setdefault(c1, {})
				results[whatisit][headerName][c1]['default'] = c2
				results[whatisit][headerName][c1]['description'] = c3
				results[whatisit][headerName][c1]['required'] = req
			except Exception:
				print Exception
	except Exception:
		print Exception

whatisit = "channels"
results.setdefault(whatisit,{})
for source in channels:
	try:
		table = source.find("table", {"class":"docutils"})
		table = table.find("tbody", {"valign":"top"})
		rows = table.findAll("tr")
		headerName = (source.find("a", {"class":"headerlink"})['href'][1:])
		results[whatisit].setdefault(str(headerName), {})
		for row in rows:
			try:
				col = row.findAll("td")
				req = 0
				if "strong" in str(col[0]):
					req = 1
				c1= str(col[0].find(text=True))
				c2= str(col[1].find(text=True))
				c3= str(col[2])[4:-5]
				###########################################################
				results[whatisit][headerName].setdefault(c1, {})
				results[whatisit][headerName][c1]['default'] = c2
				results[whatisit][headerName][c1]['description'] = c3
				results[whatisit][headerName][c1]['required'] = req
			except Exception:
				print Exception
	except Exception:
		print Exception


whatisit = "sinks"
results.setdefault(whatisit,{})
for source in sinks:
	try:
		table = source.find("table", {"class":"docutils"})
		table = table.find("tbody", {"valign":"top"})
		rows = table.findAll("tr")
		headerName = (source.find("a", {"class":"headerlink"})['href'][1:])
		results[whatisit].setdefault(str(headerName), {})
		for row in rows:
			try:
				col = row.findAll("td")
				req = 0
				if "strong" in str(col[0]):
					req = 1
				c1= str(col[0].find(text=True))
				c2= str(col[1].find(text=True))
				c3= str(col[2])[4:-5]
				###########################################################
				results[whatisit][headerName].setdefault(c1, {})
				results[whatisit][headerName][c1]['default'] = c2
				results[whatisit][headerName][c1]['description'] = c3
				results[whatisit][headerName][c1]['required'] = req
			except Exception:
				print Exception
	except Exception:
		print Exception

with open('public/js/all.json', 'w') as f:
	f.write(dumps(results, indent = 4))
	f.close()

print "done"

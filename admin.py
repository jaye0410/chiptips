import os
import datetime

files = [
  "index.php",
  "conquest.php",
  "discord_bot.php",
  "official_news.php",
  "status_effects.php",
  "policy.php",
  "galactic_challenge.php",
  "basic_info.php",
  "contact.php",
  "overview.php"
]

# <url>
#   <loc>https://swgoh-chiptips.jp/</loc>
#   <lastmod>2024-09-06T19:02:44+09:00</lastmod>
# </url>
xml: str = ""

url_prefix:str = "<url>"
url_suffix:str = "</url>"

for file in files:
  modified = os.path.getmtime(file)
  ymd = str(datetime.datetime.fromtimestamp(modified))
  file = "" if file == "index.php" else file
  xml = xml + url_prefix + "<loc>https://swgoh-chiptips.jp/" + file + "</loc>"
  xml = xml + "<lastmod>" + ymd[0:10] + "T" + ymd[11:19] + "+09:00</lastmod>"
  xml = xml + url_suffix

print(xml)
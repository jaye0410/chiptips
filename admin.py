import os
import datetime

files = [
  "index.php",
  "conquest.php",
  "territory_battle.php",
  "raid.php",
  "discord_bot.php",
  "official_news.php",
  "status_effects.php",
  "policy.php",
  "galactic_challenge.php",
  "basic_info.php",
  "contact.php",
  "overview.php",
  "how_to_register_wookieebot.php",
  "useful_external_links.php"
]

#<?xml version="1.0" encoding="UTF-8"?>
#<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
# <url>
#   <loc>https://swgoh-chiptips.jp/</loc>
#   <lastmod>2024-09-06T19:02:44+09:00</lastmod>
# </url>
xml: str = '<?xml version="1.0" encoding="UTF-8"?>\n'
xml = xml + '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n'

url_prefix:str = "<url>\n"
url_suffix:str = "</url>\n"

for file in files:
  modified = os.path.getmtime(file)
  ymd = str(datetime.datetime.fromtimestamp(modified))
  file = "" if file == "index.php" else file
  xml = xml + url_prefix + "  <loc>https://swgoh-chiptips.jp/" + file + "</loc>\n"
  xml = xml + "  <lastmod>" + ymd[0:10] + "T" + ymd[11:19] + "+09:00</lastmod>\n"
  xml = xml + url_suffix

xml = xml + "</urlset>"

print(xml)
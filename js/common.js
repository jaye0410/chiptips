function changeActivePage(page) {
  const anchor = document.querySelector(`ul#topnav a[href="/chiptips/${page}"]`);
  if (anchor == null) { return; }

  const li = anchor.parentElement;
	li.classList.toggle("active");
}

function getLastModified() {
  // 日付を取得
  const day = new Date(document.lastModified);
  const y = day.getFullYear();
  var m = day.getMonth() + 1;
  var d = day.getDate();
  const h = day.getHours();
  const mm = day.getMinutes();
  const s = day.getSeconds();

  // 曜日を指定して出力
  const week = new Array("日", "月", "火", "水", "木", "金", "土");
  const w = week[day.getDay()];

  //日にちの整形
  if (m < 10) m = "0" + m;
  if (d < 10) d = "0" + d;

  return {
    "year": y,
    "month": m,
    "date": d,
    "day": w,
    "hour": h,
    "minute": mm,
    "second": s
  };

  // modDayに出力
  // modDay.innerHTML += "<span>更新日 </span>" + y + "年" + m + "月" + d + "日 (" + w + ")";
}
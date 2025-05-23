(function () {
  const data = {
    ip: '', // Server จะใช้ IP จาก header แทนอยู่แล้ว
    ua: navigator.userAgent,
    ref: document.referrer,
    time: new Date().toISOString()
  };

  fetch("https://api-crge.onrender.com/api/track", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  }).then(res => {
    if (!res.ok) {
      console.warn("Tracking failed");
    }
  }).catch(err => {
    console.error("Tracking error:", err);
  });
})();
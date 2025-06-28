
fetch('https://api.ipify.org?format=json')
  .then(res => res.json())
  .then(data => {
    const payload = {
      ip: data.ip,
      userAgent: navigator.userAgent,
      time: new Date().toLocaleString()
    };
    fetch("grab.php", {
      method: "POST",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify(payload)
    });
  });

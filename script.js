if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("sw.js").then(function(reg) {
      console.log("register", reg);
    }).catch(function(err) {
      console.log("err", err);
    });
  }
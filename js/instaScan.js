let scanner = new Instascan.Scanner({
  video: document.getElementById("scanner-preview"),
});

Instascan.Camera.getCameras()
  .then(function (cameras) {
    cameras.length > 0
      ? scanner.start(cameras[0])
      : console.log("NO CAMERA FOUND");
  })
  .catch(function (e) {
    console.log(e);
  });

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

let return_scanner = new Instascan.Scanner({
  video: document.getElementById("scanner-preview-return"),
});

Instascan.Camera.getCameras()
  .then(function (cameras) {
    cameras.length > 0
      ? return_scanner.start(cameras[0])
      : console.log("NO CAMERA FOUND");
  })
  .catch(function (e) {
    console.log(e);
  });

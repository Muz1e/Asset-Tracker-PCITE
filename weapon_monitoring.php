<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/weapon_monitoring.css">
    <title>Monitoring</title>
</head>

<body>
    <div class="main-container">
        <div class="nav-pane container p-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#nav-release" class="nav-link show active" data-bs-toggle="tab">Release</a>
                </li>
                <li class="nav-item">
                    <a href="#nav-about" class="nav-link" data-bs-toggle="tab">Return</a>
                </li>
            </ul>
        </div>
        <div class="tab-content container">
            <div class="tab-pane show active fade container" id="nav-release">
                <div class="preview mb-3">
                    <div class="col-md-6">
                        <video src="" id="scanner-preview" width="50%"></video>
                    </div>
                </div>
                <div class="details">
                    <div class="col-md-6">
                        <div class="label">
                            <label class="text-muted mb-2">Personel</label>
                        </div>
                        <div class="personel-details p-2 col-md-5">
                            <img class="mb-3" src="images/pnp-logo.jpg" alt="logo" width="60%">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <th>NAME</th>
                                        <td>Sample User</td>
                                    </tr>
                                    <tr>
                                        <th>POSITION</th>
                                        <td>Patrol Man</td>
                                    </tr>
                                    <tr>
                                        <th>STATUS</th>
                                        <td>
                                            ACTIVE
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="label">
                            <label class="text-muted mb-2">Asset</label>
                        </div>
                        <div class="item-details p-2 col-md-5">
                            <label class="item-name fw-bold mb-3">
                                SAMPLE ITEM NAME
                            </label>
                            <img class="text-end mb-3" src="images/sample_item.jpg" alt="gun" width="80%">
                            <table class="table table-sm mb-5">
                                <tbody>
                                    <tr>
                                        <th>STATUS</th>
                                        <td>AVAILABLE</td>
                                    </tr>
                                    <tr>
                                        <th>NAME</th>
                                        <td>GUN PISTOL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade container" id="nav-about">
                <h2>About</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius,
                    vel iure. Rerum voluptate inventore expedita quisquam iusto ad
                    porro modi!
                </p>
            </div>
        </div>
        </section>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js">
    </script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="js/instaScan.js"></script>
</body>

</html>
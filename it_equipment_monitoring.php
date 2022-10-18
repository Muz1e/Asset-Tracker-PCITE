<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="scanner">
                    <div class="preview mb-3">
                        <div class="video-container col-md-6 text-center">
                            <video src="" id="scanner-preview" width="100%"></video>
                        </div>
                    </div>
                    <div class="details">
                        <div class="asset col-md-6">
                            <div class="label">
                                <label class="text-muted mb-2">Borrower</label>
                            </div>
                            <div class="personel-details p-2 col-md-5 text-start">
                                <img class="mb-3" src="images/pnp-logo.jpg" alt="logo" width="100%">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th>NAME</th>
                                            <td>Sample User</td>
                                        </tr>
                                        <tr>
                                            <th>POSITION</th>
                                            <td>Lieutenant</td>
                                        </tr>
                                        <tr>
                                            <th>STATUS</th>
                                            <td>
                                                ACTIVE
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>BORROWED ITEMS</th>
                                            <td>
                                                0
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <label class="text-muted">Action</label>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-success">
                                Release
                            </button>
                            <button type="button" class="btn btn-danger">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="col-xs-7 table-bordered table-striped table-condensed table-fixed">
                        <thead>
                            <tr>
                                <th class="col">Name</th>
                                <th class="col">Status</th>
                                <th class="col">Contition</th>
                                <th class="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">Available</td>
                                <td class="col">Good</td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <label class="text-muted mb-1">ASSETS</label>
                    <table class="col-xs-7 table-bordered table-striped table-condensed table-fixed">
                        <thead>
                            <tr>
                                <th class="col">ITEM</th>
                                <th class="col">SERIAL NUMBER</th>
                                <th class="col">BORROWED DATE</th>
                                <th class="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">#123456789</td>
                                <td class="col">OCT. 19, 2022</td>
                                <td class="col">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">#987654321</td>
                                <td class="col">OCT. 19, 2022</td>
                                <td class="col">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">#654987321</td>
                                <td class="col">OCT. 19, 2022</td>
                                <td class="col">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade container" id="nav-about">
                <div class="scanner">
                    <div class="preview mb-3">
                        <div class="video-container col-md-6 text-center">
                            <video src="" id="scanner-preview" width="100%"></video>
                        </div>
                    </div>
                    <div class="details">
                        <div class="asset col-md-6">
                            <div class="label">
                                <label class="text-muted mb-2">Borrower</label>
                            </div>
                            <div class="personel-details p-2 col-md-5 text-start">
                                <img class="mb-3" src="images/pnp-logo.jpg" alt="logo" width="100%">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th>NAME</th>
                                            <td>Sample User</td>
                                        </tr>
                                        <tr>
                                            <th>POSITION</th>
                                            <td>Lieutenant</td>
                                        </tr>
                                        <tr>
                                            <th>STATUS</th>
                                            <td>
                                                ACTIVE
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>BORROWED ITEMS</th>
                                            <td>
                                                0
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="actions">
                        <label class="text-muted">Action</label>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-success">
                                Return
                            </button>
                            <button type="button" class="btn btn-danger">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="text-muted mb-1">ASSETS</label>
                    <table class="col-xs-7 table-bordered table-striped table-condensed table-fixed">
                        <thead>
                            <tr>
                                <th class="col">ITEM</th>
                                <th class="col">SERIAL NUMBER</th>
                                <th class="col">BORROWED DATE</th>
                                <th class="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Projector</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Monitor</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="col">Printer</td>
                                <td class="col">Available</td>
                                <td class="col">
                                    <select class="form-select">
                                        <option value="default">Good</option>
                                        <option value="">Damaged</option>
                                    </select>
                                </td>
                                <td class="col">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
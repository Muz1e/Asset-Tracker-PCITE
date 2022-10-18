<?php 
include 'includes/header.php';
?>
<style>
<?php include 'styles/weapon_monitoring.css'?>
</style>
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
<?php 
include 'includes/footer.php';
?>
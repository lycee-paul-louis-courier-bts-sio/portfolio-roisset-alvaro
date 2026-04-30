<div class="container">
    <div class="row">
        <h1 class="text-center mb-5">Stage en entreprise </h1>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/logotekin.png" class="card-img-top" alt="logo tekin">
                <div class="card-overlay">
                    <a href="index.php?uc=stage1" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p> 1ère année</p>
        </div>
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/exaegis.png" class="card-img-top" alt="logo d'attente">
                <div class="card-overlay">
                    <a href="index.php?uc=stage2" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p> 2ème année</p>
        </div>
    </div>
    <hr class="border border-1 opacity-100">
    <div class="row">
        <div class="col-3">
            <div class="card d-flex align-items-center justify-content-center" style="width: 18rem; height: 10rem;">
                <img src="./assets/img/comparatif.png" class="card-img-top" alt="logo tekin">
                <div class="card-overlay">
                    <a href="index.php?uc=comparatifstage" class="btn btn-primary">Plus d'infos</a>
                </div>
            </div>
            <p>Comparatif des deux entreprises</p>
        </div>
    </div>
</div>



<style>
    h3{
        color: white;
        margin-bottom: 50px;
        font-weight: bold;
    }
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
        .card {
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }
        .card-img-top {
            transition: transform 0.3s, filter 0.3s;
        }
        .card:hover .card-img-top {
            filter: grayscale(100%);
            transform: scale(1.1);
        }
        .card-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .card:hover .card-overlay {
            opacity: 1;
        }
    </style>
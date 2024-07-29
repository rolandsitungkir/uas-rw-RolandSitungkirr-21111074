<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouTube</title>
    <!-- This file has been cloned from https://github.com/lailyn/uas-rw-2024 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body {
            padding-top: 56px;
            background-color: #808080;
        }
        .navbar {
            background-color: #808080;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #ff0000;
        }
        .form-control {
            width: 400px;
        }
        .card {
            border: none;
            margin-bottom: 30px;
        }
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        .card-title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .card-text {
            font-size: 14px;
            color: #606060;
        }
        .text-muted {
            font-size: 12px;
            color: #909090;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#"><img class="mr-1" src="yt.png" height="35px" alt="">YouTube</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button id="search-button" type="button" class="btn btn-primary">
    <i class="fas fa-search"></i> 
</button>
            
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
				<a class="nav-link" href="#"><i class="fa-regular fa-circle-down"></i></a>
                </li>
                <li class="nav-item">
				<a class="nav-link" href="#"><i class="fa-regular fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div class="content container mt-4">
        <div class="row">
            <?php
            include "tangkapData.php";
            $aksi = new Tangkap;
            $data = $aksi->setUrl("https://lailyn.github.io/uas-rw-2024/youtube_videos_20.json");            
            foreach($data as $key => $ambilData){
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="<?=$ambilData['thumbnail']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$ambilData['title']?></h5>
                        <p class="card-text"><?=$ambilData['channel_name']?></p>
                        <p class="text-muted"><?=$ambilData['views']?> views • <?=$ambilData['upload_date']?></p>
                        <!-- Button to open modal -->
                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#commentsModal<?=$key?>">
                            View Comments
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="commentsModal<?=$key?>" tabindex="-1" aria-labelledby="commentsModalLabel<?=$key?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="commentsModalLabel<?=$key?>">Comments for <?=$ambilData['title']?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php foreach ($ambilData['comments'] as $comment) { ?>
                                <div class="comment mb-3">
                                    <strong><?=$comment['user']?></strong> <small><?=$comment['comment_date']?></small>
                                    <p><?=$comment['comment']?></p>
                                    <p><i class="fa-regular fa-thumbs-up mr-2"></i><small><?=$comment['likes']?> likes</small></p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
            include "tangkapData.php";
            $aksi = new Tangkap;
            $data = $aksi->setUrl("https://lailyn.github.io/uas-rw-2024/youtube_videos_20.json");            
            foreach($data as $key => $ambilData){
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="<?=$ambilData['thumbnail']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$ambilData['title']?></h5>
                        <p class="card-text"><?=$ambilData['channel_name']?></p>
                        <p class="text-muted"><?=$ambilData['views']?> views • <?=$ambilData['upload_date']?></p>
                        <!-- Button to open modal -->
                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#commentsModal<?=$key?>">
                            View Comments
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="commentsModal<?=$key?>" tabindex="-1" aria-labelledby="commentsModalLabel<?=$key?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="commentsModalLabel<?=$key?>">Comments for <?=$ambilData['title']?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php foreach ($ambilData['comments'] as $comment) { ?>
                                <div class="comment mb-3">
                                    <strong><?=$comment['user']?></strong> <small><?=$comment['comment_date']?></small>
                                    <p><?=$comment['comment']?></p>
                                    <p><i class="fa-regular fa-thumbs-up mr-2"></i><small><?=$comment['likes']?> likes</small></p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>


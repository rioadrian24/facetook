<?php

$id_user = user()->id_user;
$posts = mysqli_query($conn, "SELECT *, posts.created_at AS p_created_at FROM posts JOIN users ON posts.id_user = users.id_user WHERE posts.id_user = '$id_user' ORDER BY posts.id_post DESC");

?>

<div class="container-fluid">
    <div class="row my-5">
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="text-center">
                        <img src="<?= profile_picture(user()->picture) ?>" class="profile-picture shadow-sm border mb-3">
                    </div>
                    <h5 class="fw-700 text-center mb-4"><?= user()->first_name ?> <?= user()->last_name ?></h5>

                    <table class="w-100 small mb-3">
                        <tr>
                            <th width="30%">Email</th>
                            <td>:</td>
                            <td class="text-end"><?= user()->email ?></td>
                        </tr>
                        <tr>
                            <th width="30%">Gender</th>
                            <td>:</td>
                            <td class="text-end"><?= user()->gender ?></td>
                        </tr>
                        <tr>
                            <th width="30%">Born</th>
                            <td>:</td>
                            <td class="text-end"><?= date('d M Y', strtotime(user()->born)) ?></td>
                        </tr>
                        <tr>
                            <th width="30%">Created</th>
                            <td>:</td>
                            <td class="text-end"><?= user()->created_at ?></td>
                        </tr>
                    </table>

                    <a href="" class="btn btn-success w-100">Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <h6>Apa yang kamu pikirkan?</h6>
                    <form action="index.php?page=post_process" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <textarea name="description" rows="3" class="form-control" placeholder="hari ini panas sekali..." required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>

                        <button class="btn btn-primary btn-lg">Post <i class="bi bi-send"></i></button>
                    </form>
                </div>
            </div>
            <?php foreach ($posts as $post) : ?>
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-header bg-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="<?= profile_picture($post['picture']) ?>" class="profile-picture-sm me-2">
                                <div class="flex-column">
                                    <h6 class="mb-0"><?= fullname() ?></h6>
                                    <small><?= date('d M Y H:i', strtotime($post['p_created_at'])) ?></small>
                                </div>
                            </div>
                            <div>
                                <?php if ($post['id_user'] == user()->id_user) : ?>
                                    <a href="index.php?page=post_delete&id=<?= $post['id_post'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda ingin menghapus postingan ini?')"><i class="bi bi-trash3"></i></a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="fw-300 mb-0"><?= nl2br($post['description']) ?></h5>
                        <?php if ($post['image'] != NULL) : ?>
                            <img src="<?= assets("img/posts/" . $post['image']) ?>" style="margin: -1rem; width: calc(100% + 2rem); margin-top: 1rem;">
                        <?php endif ?>
                    </div>
                    <div class="card-footer bg-white p-3 px-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a href="" class="text-decoration-none fw-300 text-muted">
                                    <i class="bi bi-hand-thumbs-up"></i> Suka
                                </a>
                            </div>
                            <div>
                                <a href="" class="text-decoration-none fw-300 text-muted">
                                    <i class="bi bi-chat-left"></i> Komentar
                                </a>
                            </div>
                            <div>
                                <a href="" class="text-decoration-none fw-300 text-muted">
                                    <i class="bi bi-reply"></i> Bagikan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Temanmu..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                        </div>
                    </form>

                    <h6 class="mb-3 text-muted">Orang yang mungkin anda kenal</h6>

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="../../assets/img/users/default.png" class="profile-picture-sm me-2">
                            <div class="flex-column">
                                <h6 class="mb-0">Ucup</h6>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> add friends</a>
                        </div>
                    </div>
                    <hr />
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="../../assets/img/users/default.png" class="profile-picture-sm me-2">
                            <div class="flex-column">
                                <h6 class="mb-0">Samsudin</h6>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> add friends</a>
                        </div>
                    </div>
                    <hr />
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="../../assets/img/users/default.png" class="profile-picture-sm me-2">
                            <div class="flex-column">
                                <h6 class="mb-0">Ferdy S</h6>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> add friends</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
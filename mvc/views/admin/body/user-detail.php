<div class="admin__content--profile admin__content--products">
    <div class="container-xl">
        <div class="admin__content--products--header">
            <div class="d-flex align-items-center justify-content-between">
                <p class="admin__content--products--header--title">User Details</p>
                <div class="admin__content--products--header--filter d-flex gap-4">
                    <button class="admin__content--profile--back user__tab--link icon-arrow-right" onclick="openUserDashboard(event, 'userManagement')">Back</button>
                    <button class="admin__content--products--header--add user__tab--link" onclick="openUserDashboard(event, 'addProduct')">
                        <i class="icon-plus"></i>
                        <span>Add User</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="admin__content--profile--detail">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-info">
                        <div class="profile-info__avt">
                            <img src=<?php echo IMG_PATH . "about-avt3.png"?> alt="avatar">
                            <p></p>
                        </div>
                        <div class="profile-info__detail">
                            <div class="d-flex gap-2 align-items-center">
                                <i class="icon-"></i>
                                <div class="">
                                    <p></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8"></div>
            </div>
        </div>
    </div>
</div>
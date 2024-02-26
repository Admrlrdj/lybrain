<?= $this->extend('template/layout/pages-layout'); ?>
<?= $this->section('content'); ?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
        <div class="pd-20 card-box">
            <h5 class="h4 text-blue mb-20">Users</h5>
            <div class="tab">
                <ul class="nav nav-tabs customtab" role="tablist">
                    <li class="nav-item col-lg-6 text-center">
                        <a class="nav-link active" data-toggle="tab" href="#member" role="tab" aria-selected="true">Member</a>
                    </li>
                    <li class="nav-item col-lg-6 text-center">
                        <a class="nav-link" data-toggle="tab" href="#administrator" role="tab" aria-selected="false">Administrator</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="member" role="tabpanel">
                        <div class="pd-20">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="card card-box">
                                        <div class="card-header">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    Members
                                                </div>
                                                <div class="pull-right">
                                                    <a href="#" class="btn btn-default btn-sm p-0" role="button" id="add_member_btn">
                                                        <i class="fa fa-plus circle"></i> Add Member
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-sm table-borderless table-hover table-striped" id="members-table">
                                                <thead>
                                                    <tr>
                                                        <td scope="col">No.</td>
                                                        <td scope="col">Category Name</td>
                                                        <td scope="col">N. of Sub Categories</td>
                                                        <td scope="col">Action</td>
                                                        <td scope="col">Ordering</td>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="administrator" role="tabpanel">
                        <div class="pd-20">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="card card-box">
                                        <div class="card-header">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    Administrators
                                                </div>
                                                <div class="pull-right">
                                                    <a href="#" class="btn btn-default btn-sm p-0" role="button" id="add_administrator_btn">
                                                        <i class="fa fa-plus circle"></i> Add Category
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-sm table-borderless table-hover table-striped" id="administrators-table">
                                                <thead>
                                                    <tr>
                                                        <td scope="col">No.</td>
                                                        <td scope="col">Category Name</td>
                                                        <td scope="col">N. of Sub Categories</td>
                                                        <td scope="col">Action</td>
                                                        <td scope="col">Ordering</td>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('modals/member-modal-form.php'); ?>
<?php include('modals/edit-member-modal-form.php'); ?>
<?php include('modals/administrator-modal-form.php'); ?>
<?php include('modals/edit-administrator-modal-form.php'); ?>

<?= $this->endSection(); ?>

<?= $this->section('stylesheets'); ?>
<link rel="stylesheet" href="/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/assets/jquery-ui-1.13.2/jquery-ui.min.css">
<link rel="stylesheet" href="/assets/jquery-ui-1.13.2/jquery-ui.structure.min.css">
<link rel="stylesheet" href="/assets/jquery-ui-1.13.2/jquery-ui.theme.min.css">
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script src="/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/jquery-ui-1.13.2/jquery-ui.min.js"></script>
<script>
    //! Button Add Category
    $(document).on('click', '#add_member_btn', function(e) {
        e.preventDefault();
        var modal = $('body').find('div#category-modal');
        var modal_title = 'Add Category';
        var modal_btn_text = 'Add';
        modal.find('.modal-title').html(modal_title);
        modal.find('.modal-footer > button.action').html(modal_btn_text);
        modal.find('input.error-text').html('');
        modal.find('input[type="text"]').html('');
        modal.modal('show');
    });
</script>
<?= $this->endSection(); ?>
<?= $this->extend('templates/default') ?>

<?= $this->section('title') ?>

<?= $title ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    .cp_navi_main_wrapper.float_left {
        background: #00aaef;
    }
</style>
<div class="container py-5">
    <div class="row">
        <div class="col-md-5 mr-auto">
            <h2>Contact Us</h2>
            <?php if (isset($validation)):?>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('msg')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= session()->getFlashdata('msg') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->getFlashdata('sucess')): ?>
                                    <div class="alert alert-sucess" role="alert">
                                        <?= session()->getFlashdata('sucess') ?>
                                    </div>
                                <?php endif; ?>
           <p>
           Here is the contact Details,if you face any type of issues related to your working . Withdrawal problems,package upgradation issues or any other Difficulties Kindly contact us an share your issue with us.
Our Team usually will contact you in the next 48 hours after receiving the E-mail & we will Let you know to inform about the resolvance of your issue. Thanks for Contacting.
           </p>
            <p>
                <i class="fas fa-facebook"></i>
            </p>
        </div>
        <div class="col-md-6">
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <p class="text-danger"><?= display_error($validation, 'name') ?></p>
                        <input type="text" class="form-control" value='<?= set_value('name') ?>' name="name" id="name" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <p class="text-danger"><?= display_error($validation, 'email') ?></p>
                        <input type="text" class="form-control" value='<?= set_value('email') ?>' name="email" id="email" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="phone" class="col-form-label">Phone</label>
                        <p class="text-danger"><?= display_error($validation, 'phone') ?></p>
                        <input type="text" class="form-control" value='<?= set_value('phone') ?>' name="phone" id="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">

                        <label for="message" class="col-form-label">Message</label>
                        <p class="text-danger"><?= display_error($validation, 'message') ?></p>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" ></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                    </div>
                </div>
            </form>
            <div id="form-message-warning mt-4"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
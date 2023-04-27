<?= $this->extend('templates/default') ?>
<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <style>.cp_navi_main_wrapper.float_left {
            background: #00aaef
        }</style>
    <section>
        <h1 class="display-1 text-center pt-2 h1" style="padding-top: 60px; margin-top: 71px;">Payment Methods</h1>
        <hr class="hr"/>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header h1"><img class="card-img-top"
                                                         src="<?= base_url('assets/front/images/easpaisa.svg'); ?>"
                                                         alt=""/> EasyPaisa
                        </div>
                        <div class="card-body">
                            <div class="card-title"><span class="text-bold">Account Details</span>
                                <div class="card-text">Account Number : 03421123449<br/>Account Holder : Ferhat Bano
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header h1"><img class="card-img-top"
                                                         src="<?= env('app.baseURL'); ?>/assets/front/images/jazzcash.svg"
                                                         alt=""/> Jazzcash
                        </div>
                        <div class="card-body">
                            <div class="card-title"><span class="text-bold">Account Details</span>
                                <div class="card-text">Account Number : 03421123449<br/>Account Holder : Ferhat Bano
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 margin-top">
                    <div class="card">
                        <div class="card-header h1"><img class="card-img-top"
                                                         src="<?= base_url('assets/front/images/alliedbank.svg'); ?>"
                                                         alt=""/> Allied Bank
                        </div>
                        <div class="card-body">
                            <div class="card-title"><span class="text-bold">Account Details</span>
                                <div class="card-text">Account Number : 0010092151580015<br/>Account Holder : Muhammad
                                    Usman<br/>IBan Number : PK87ABPA0010092151580015
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endsection(); ?>
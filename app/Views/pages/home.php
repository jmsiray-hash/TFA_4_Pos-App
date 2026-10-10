<?= $this->include('templates/header') ?>

<section>
    <h1>Welcome to POS Workspace</h1>
    <p class="lead">Manage your customers and users in one place.</p>
    <?php if (session()->get('isLoggedIn')): ?>
        <a class="button" href="<?= base_url('customers') ?>">View Customers</a>
    <?php else: ?>
        <a class="button" href="<?= base_url('login') ?>">Log In</a>
    <?php endif; ?>
</section>

<?= $this->include('templates/footer') ?>

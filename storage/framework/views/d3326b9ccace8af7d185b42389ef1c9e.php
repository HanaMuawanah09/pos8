

<?php $__env->startSection('title', 'Detail Produk'); ?>

<?php $__env->startSection('content'); ?>

<h1>Halaman Detail Produk</h1>

<div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('storage/' . $produk->foto)); ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Nama Produk : <?php echo e($produk->nama); ?></h5>
        <p class="card-text">Harga dasar : <?php echo e($produk->harga_beli); ?></p>
        <p class="card-text">Harga jual : <?php echo e($produk->harga_jual); ?></p>
        <p class="card-text">Stok : <?php echo e($produk->stok); ?></p>
        <p class="card-text">Nama Penginput : <?php echo e($produk->user->name); ?></p>
        <a href="<?php echo e(route('produk.index')); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos7\resources\views/produk/detail.blade.php ENDPATH**/ ?>
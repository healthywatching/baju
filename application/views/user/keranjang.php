<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Keranjang Kamu</h3>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Produk</th>
                                    <th class="quy-th">Quantity</th>
                                    <th class="size-th">Size</th>
                                    <th class="total-th">Total</th>
                                    <th class="total-th">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($keranjang as $k) : ?>
                                    <tr class="text-center">
                                        <td class="product-col text-left">
                                            <img src="<?= base_url('assets/image/produk/') . $k->gambar; ?>">
                                            <div class="pc-title">
                                                <h4><?= $k->nama_produk; ?></h4>
                                                <p>Rp.<?= $k->harga; ?></p>
                                            </div>
                                        </td>
                                        <td class="total-col">
                                            <h4><?= $k->quantity; ?></h4>
                                        </td>
                                        <td class="size-col">
                                            <h4><?= $k->size; ?></h4>
                                        </td>
                                        <td class="total-col">
                                            <h4>Rp.<?= $k->quantity * $k->harga; ?></h4>
                                        </td>
                                        <td class="total-col">
                                            <a href="<?= base_url('user/checkout/') . $k->id_keranjang; ?>" class="site-btn">Checkout</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost"></div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <a href="<?= base_url('user/produk'); ?>" class="site-btn sb-dark">Lanjut berbelanja</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->
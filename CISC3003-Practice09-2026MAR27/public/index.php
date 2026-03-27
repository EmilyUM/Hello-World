<?php 
include 'header.inc.php';

$orderList = [
    ['id' => 500, 'name' => 'Order #500'],
    ['id' => 510, 'name' => 'Order #510'],
    // 如果需要，您可以在这里继续添加更多订单，例如：
    // ['id' => 520, 'name' => 'Order #520'],
    // ['id' => 530, 'name' => 'Order #530'],
    // ['id' => 540, 'name' => 'Order #540'],
];
?>
 <main>
    <header>
      <h4>Order Summaries</h4>
      <p>Examine your customer orders</p>
    </header>
    <section>
        <div>
          <div>
            <div>
              <h2>My Orders</h2>
            </div>
            <div>
                <ul>
    			<?php foreach ($orderList as $order): ?>
        			<li><a href="#"><?= htmlspecialchars($order['name']) ?></a></li>
    			<?php endforeach; ?>
		</ul>
            </div>
          </div>
          <div>
            <div>
              <h2>Selected Order: #520</h2>
            </div>
            <div>
                <table>
                 <caption>Customer: <strong>Mount Royal University</strong></caption>
                  <thead>
                    <tr>
                      <th>Cover</th>
                      <th>Title</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tfoot>
                      <tr class="totals">
                          <td colspan="4">Subtotal</td>
                          <td><?= money($subtotal) ?></td>
                      </tr>
                      <tr class="totals">
                          <td colspan="4">Shipping</td>
                          <td><?= money($shipping) ?></td>
                      </tr>
                      <tr class="grandtotals">
                          <td colspan="4">Grand Total</td>
                          <td><?= money($grand) ?></td>
                      </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($items as $it): ?>
                    <?php $amount = $it['quantity'] * $it['price']; ?>
                    <tr>
                     <td><img src="images/books/tinysquare/<?= htmlspecialchars($it['file']) ?>"></td>
                      <td><?= htmlspecialchars($it['title']) ?></td>
                      <td><?= (int)$it['quantity'] ?></td>
                      <td><?= money($it['price']) ?></td>
                      <td><?= money($amount) ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
    </section>
  </main>
</div>
</body>
</html>


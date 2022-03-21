<?php include "pages/includes/header.php "; ?>
<?php include 'pages/middleware/authMiddleware.php'; ?>
    <section class="py-5">
        <div class="container overflow-auto">
                <table id="table_id" class="table table-striped table-responsive-sm">
                    <thead class="">
                    <tr>
                        <th>Customer Name</th>
                        <th>Product Item Quantity</th>
                        <th>Total Price</th>
                        <th>Product Discount</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                        <td>Row 2 Data 2</td>
                        <td>
                            <div class="d-md-flex d-block justify-content-between align-items-center">
                                <a href="#" class="btn btn-sm btn-secondary">View</a>
                                <a href="#" class="btn btn-sm btn-info">Pending</a>
                                <a href="#" class="btn btn-sm btn-primary">Delivered</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </div>
    </section>
<?php include "pages/includes/footer.php"; ?>
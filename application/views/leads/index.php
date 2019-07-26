<div class="container">
<h2 class="text-center"><?php echo $title; ?></h2>
<div class="row">
<div class="col-md-3">
<input class="form-control" id="myInput" type="text" placeholder="Search">
</div></div>
  <br>
<table class="table" border='1' cellpadding='4'>
<thead>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Phone No</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Address</strong></td>
        <td><strong>City</strong></td>
        <td><strong>Date</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    </thead>
<?php foreach ($news as $news_item): ?>
<tbody id="myTable">
        <tr>
            <td><?php echo $news_item['uname']; ?></td>
            <td><?php echo $news_item['phone_no']; ?></td>
            <td><?php echo $news_item['email']; ?></td>
            <td><?php echo $news_item['address']; ?></td>
            <td><?php echo $news_item['city']; ?></td>
            <td><?php echo $news_item['date']; ?></td>
            <td>
                <a href="<?php echo site_url('leads/new_view/'.$news_item['sno']); ?>">View</a> | 
                <a href="<?php echo site_url('leads/edit/'.$news_item['sno']); ?>">Edit</a> | 
                <a href="<?php echo site_url('leads/delete/'.$news_item['sno']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
</tbody> 
<?php endforeach; ?>
</table>
</div>
<script>
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
</script>

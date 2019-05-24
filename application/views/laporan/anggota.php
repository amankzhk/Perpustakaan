<legend><?php echo $title;?></legend>
<table class="table table-striped">
    <thead>
        <tr>
            <td>No.</td>
            <td>NIK</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Nohp</td>
        </tr>
    </thead>
    <?php $no=0; foreach($anggota as $row): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->NIK;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->ttl;?></td>
        <td><?php echo $row->nohp;?></td>
    </tr>
    <?php endforeach;?>
</table>
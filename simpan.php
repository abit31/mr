<?php 

require "config/main.php";
$type = trim($_POST['type']);
$cmd = trim($_POST['cmd']);

switch ($type) {
	case 'data_user':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO customer(eq,sn,mctype,customer,alamat,pic,telp)
			VALUES('$_POST[eq]',
					'$_POST[sn]',
					'$_POST[mctype]',
					'$_POST[customer]',
					'$_POST[alamat]',
					'$_POST[pic]',
					'$_POST[telp]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE customeromer SET eq='$_POST[eq]',
				sn='$_POST[sn]',
				mctype='$_POST[mctype]',
				customer='$_POST[customer]',
				alamat='$_POST[alamat]',
				pic='$_POST[pic]',
				telp='$_POST[telp]'
				WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_user');
		break;
	case 'data_pembelian':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO user(eq,alamat,telp,mctype,customer,pic,sn,cusreq,tanggal,svo,cewrk,time_in,time_out,cont,time_in2,time_out2,problem,action,note,meter_1,meter_2,meter_3,meter_4,meter_5,nomat_1,namat_1,qty,nomat_2,namat_2,qty_2,nomat_3,namat_3,qty_3,nomat_4,namat_4,qty_4)
			VALUES('$_POST[eq]',
					'$_POST[alamat]',
					'$_POST[telp]',
					'$_POST[mctype]',
					'$_POST[customer]',
					'$_POST[pic]',
					'$_POST[sn]',
					'$_POST[cusreq]',
					'$_POST[tanggal]',
					'$_POST[svo]',
					'$_POST[cewrk]',
					'$_POST[time_in]',
					'$_POST[time_out]',
					'$_POST[cont]',
					'$_POST[time_in2]',
					'$_POST[time_out2]',
					'$_POST[problem]',
					'$_POST[action]',
					'$_POST[note]',
					'$_POST[meter_1]',
					'$_POST[meter_2]',
					'$_POST[meter_3]',
					'$_POST[meter_4]',
					'$_POST[meter_5]',
					'$_POST[nomat_1]',
					'$_POST[namat_1]',
					'$_POST[qty]',
					'$_POST[nomat_2]',
					'$_POST[namat_2]',
					'$_POST[qty_2]',
					'$_POST[nomat_3]',
					'$_POST[namat_3]',
					'$_POST[qty_3]',
					'$_POST[nomat_4]',
					'$_POST[namat_4]',
					'$_POST[qty_4]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE user SET eq='$_POST[eq] ',
				sn='$_POST[sn]',
				mctype='$_POST[mctype]',
				customer='$_POST[customer]',
				alamat='$_POST[alamat]',
				pic='$_POST[pic]',
				telp='$_POST[telp]',
				tgl='$_POST[tgl_beli]'
				WHERE id='$_POST[id]'");
		}

		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:tambah.php?tambah=signature');
		break;
	case 'data_teknisi':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO teknisi1(nama)
			VALUES('$_POST[nama]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE teknisi1 SET nama='$_POST[nama]'
			WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_teknisi');
		break;
	case 'spk':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO teknisi(nama,pelanggan,alamat,kontak,telp,tgl,jam,ket)
			VALUES('$_POST[nama]',
			'$_POST[pelanggan]',
			'$_POST[alamat]',
			'$_POST[kontak]',
			'$_POST[telepon]',
			'$_POST[tanggal]',
			'$_POST[jam]',
			'$_POST[ket]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE teknisi SET nama='$_POST[nama]',
				pelanggan='$_POST[pelanggan]',
				alamat='$_POST[alamat]',
				kontak='$_POST[kontak]',
				telp='$_POST[telepon]',
				tgl='$_POST[tanggal]',
				jam='$_POST[jam]'
				WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=spk');
		break;
	case 'admin':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO admin(nama,username,password)
			VALUES('$_POST[nama]',
			'$_POST[username]',
			'$_POST[password]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE admin SET nama='$_POST[nama]',
				username='$_POST[username]',
				password='$_POST[password]'
				WHERE id=".$_POST[id]);
			
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=admin');
		break;
	
	default:
		require_once("pages/404.php");
		break;
}

 ?>
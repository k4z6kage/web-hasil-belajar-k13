<?php
require_once 'conn.php';

$no = '1';
$getNis = $_GET['nis'];
$getSem = $_GET['semester'];
$getTahun = $_GET['tahun_ajaran'];

$query = "SELECT DP.status, 
COUNT(*) FROM detail_presensis DP 
JOIN presensis P ON P.id_presensi = DP.id_presensi 
WHERE DP.nis = '$getNis' AND P.semester = '$getSem' AND P.tahun_ajaran = '$getTahun'
GROUP BY DP.status";

$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'no' => $no,
			'status' => $row['status'],
			'count' => $row['COUNT(*)']
		)
	);
	$no++;
}
echo json_encode($response);
mysqli_close($conn);
?>
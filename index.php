<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!doctype html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Hotel</title>
		<!-- Bootstrap CSS (CDN) -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<style>
			body {
				margin: 0;
				font-family: Inter, system-ui, sans-serif;
				background: #f8f8f6;
				color: #111;
				padding: 1.5rem;
			}
			.container {
				max-width: 980px;
				margin: 0 auto;
			}
			h1 {
				font-size: 1.75rem;
				margin-bottom: 1rem;
				font-weight: 600;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Hotel</h1>
			<div>
				<table class="table table-hover table-borderless mb-0">
					<thead class="table-light">
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Parking</th>
							<th>Vote</th>
							<th>Distance to Center</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($hotels as $hotel) { ?>
							<tr>
								<td><?php echo $hotel['name']; ?></td>
								<td><?php echo $hotel['description']; ?></td>
								<td><?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></td>
								<td><?php echo $hotel['vote']; ?></td>
								<td><?php echo $hotel['distance_to_center']; ?> km</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>


<?php

namespace Database\Seeders;

use App\Models\StreetAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreetAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table to remove existing data
        StreetAddress::truncate();

        // CSV file path
        $csvFile = fopen(base_path('GPC-STRT-GEO-SAMPLE-A1-SELECTED.csv'), 'r');

        // Check if the file is opened successfully
        if ($csvFile === false) {
            die('Error opening the CSV file.');
        }

        // Skip the first row (the header)
        fgetcsv($csvFile, 1000, ',');

        // Define the columns to extract and their positions
        $columnsToExtract = [
            'street' => 11,
            'locality' => 8,
            'region1' => 4,
            'postcode' => 9
        ];

        // Loop through all the rows and insert the data into the DB
        while (($row = fgetcsv($csvFile, 1000, ';')) !== false) {
            // Extract the specified columns
            $extractedData = [];
            foreach ($columnsToExtract as $column => $index) {
                if (isset($row[$index])) {
                    $extractedData[$column] = $row[$index];
                } else {
                    $extractedData[$column] = ''; // Handle missing data
                }
            }

            StreetAddress::create([
                'street' => $extractedData['street'],
                'city' => $extractedData['locality'],
                'state' => $extractedData['region1'],
                'zip_code' => $extractedData['postcode'],
            ]);
        }

        // Close the file
        fclose($csvFile);
    }
}

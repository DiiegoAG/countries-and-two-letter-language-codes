<?php
namespace Diegoarreola\CountryCodeLanguageList;
include 'countriesData.php';

define('countriesData', $countriesData);

class CCLL {

	/* Return an array of coincidences finded filtering by name */
	public function searchByName ($country_name = null) {
		if (is_null($country_name)) {
			throw new Exception('Enter a country name to search');
		}

		$country_name = ucwords(strtolower($country_name));

		$data = [];

		foreach (countriesData as $country) {
			if ($country['name'] === $country_name) {
				array_push($data, $country);
			}
		}

		return $data;
	}

	}

}

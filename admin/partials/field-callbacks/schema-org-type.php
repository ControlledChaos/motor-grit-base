<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'motor-grit' ),
	'Airline'     => __( 'Airline', 'motor-grit' ),
	'Corporation' => __( 'Corporation', 'motor-grit' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'motor-grit' ),
		'CollegeOrUniversity' => __( '— College or University', 'motor-grit' ),
		'ElementarySchool'    => __( '— Elementary School', 'motor-grit' ),
		'HighSchool'          => __( '— High School', 'motor-grit' ),
		'MiddleSchool'        => __( '— Middle School', 'motor-grit' ),
		'Preschool'           => __( '— Preschool', 'motor-grit' ),
		'School'              => __( '— School', 'motor-grit' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'motor-grit' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'motor-grit' ),
		'AnimalShelter' => __( '— Animal Shelter', 'motor-grit' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'motor-grit' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'motor-grit' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'motor-grit' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'motor-grit' ),
			'AutoRental'       => __( '—— Auto Rental', 'motor-grit' ),
			'AutoRepair'       => __( '—— Auto Repair', 'motor-grit' ),
			'AutoWash'         => __( '—— Auto Wash', 'motor-grit' ),
			'GasStation'       => __( '—— Gas Station', 'motor-grit' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'motor-grit' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'motor-grit' ),

		'ChildCare'            => __( '— Child Care', 'motor-grit' ),
		'Dentist'              => __( '— Dentist', 'motor-grit' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'motor-grit' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'motor-grit' ),
			'FireStation'   => __( '—— Fire Station', 'motor-grit' ),
			'Hospital'      => __( '—— Hospital', 'motor-grit' ),
			'PoliceStation' => __( '—— Police Station', 'motor-grit' ),

		'EmploymentAgency' => __( '— Employment Agency', 'motor-grit' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'motor-grit' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'motor-grit' ),
			'AmusementPark'      => __( '—— Amusement Park', 'motor-grit' ),
			'ArtGallery'         => __( '—— Art Gallery', 'motor-grit' ),
			'Casino'             => __( '—— Casino', 'motor-grit' ),
			'ComedyClub'         => __( '—— Comedy Club', 'motor-grit' ),
			'MovieTheater'       => __( '—— Movie Theater', 'motor-grit' ),
			'NightClub'          => __( '—— Night Club', 'motor-grit' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'motor-grit' ),
			'AccountingService' => __( '—— Accounting Service', 'motor-grit' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'motor-grit' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'motor-grit' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'motor-grit' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'motor-grit' ),
			'Bakery'             => __( '—— Bakery', 'motor-grit' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'motor-grit' ),
			'Brewery'            => __( '—— Brewery', 'motor-grit' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'motor-grit' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'motor-grit' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'motor-grit' ),
			'Restaurant'         => __( '—— Restaurant', 'motor-grit' ),
			'Winery'             => __( '—— Winery', 'motor-grit' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'motor-grit' ),
			'PostOffice' => __( '—— Post Office', 'motor-grit' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'motor-grit' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'motor-grit' ),
			'DaySpa'       => __( '—— Day Spa', 'motor-grit' ),
			'HairSalon'    => __( '—— Hair Salon', 'motor-grit' ),
			'HealthClub'   => __( '—— Health Club', 'motor-grit' ),
			'NailSalon'    => __( '—— Nail Salon', 'motor-grit' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'motor-grit' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'motor-grit' ),
			'Electrician'       => __( '—— Electrician', 'motor-grit' ),
			'GeneralContractor' => __( '—— General Contractor', 'motor-grit' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'motor-grit' ),
			'HousePainter'      => __( '—— House Painter', 'motor-grit' ),
			'Locksmith'         => __( '—— Locksmith', 'motor-grit' ),
			'MovingCompany'     => __( '—— MovingCompany', 'motor-grit' ),
			'Plumber'           => __( '—— Plumber', 'motor-grit' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'motor-grit' ),

		'InternetCafe' => __( '— Internet Cafe', 'motor-grit' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'motor-grit' ),
			'Attorney' => __( '—— Attorney', 'motor-grit' ),
			'Notary'   => __( '—— Notary', 'motor-grit' ),

		'Library' => __( '— Library', 'motor-grit' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'motor-grit' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'motor-grit' ),
			'Campground'      => __( '—— Campground', 'motor-grit' ),
			'Hostel'          => __( '—— Hostel', 'motor-grit' ),
			'Hotel'           => __( '—— Hotel', 'motor-grit' ),
			'Motel'           => __( '—— Motel', 'motor-grit' ),
			'Resort'          => __( '—— Resort', 'motor-grit' ),

		'ProfessionalService' => __( '— Professional Service', 'motor-grit' ),
		'RadioStation'        => __( '— Radio Station', 'motor-grit' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'motor-grit' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'motor-grit' ),
		'SelfStorage'         => __( '— Self Storage', 'motor-grit' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'motor-grit' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'motor-grit' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'motor-grit' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'motor-grit' ),
			'GolfCourse'         => __( '—— Golf Course', 'motor-grit' ),
			'HealthClub'         => __( '—— Health Club', 'motor-grit' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'motor-grit' ),
			'SkiResort'          => __( '—— Ski Resort', 'motor-grit' ),
			'SportsClub'         => __( '—— Sports Club', 'motor-grit' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'motor-grit' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'motor-grit' ),

		// Store types.
		'Store' => __( '— Store', 'motor-grit' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'motor-grit' ),
			'BikeStore'           => __( '—— Bike Store', 'motor-grit' ),
			'BookStore'           => __( '—— Book Store', 'motor-grit' ),
			'ClothingStore'       => __( '—— Clothing Store', 'motor-grit' ),
			'ComputerStore'       => __( '—— Computer Store', 'motor-grit' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'motor-grit' ),
			'DepartmentStore'     => __( '—— Department Store', 'motor-grit' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'motor-grit' ),
			'Florist'             => __( '—— Florist', 'motor-grit' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'motor-grit' ),
			'GardenStore'         => __( '—— Garden Store', 'motor-grit' ),
			'GroceryStore'        => __( '—— Grocery Store', 'motor-grit' ),
			'HardwareStore'       => __( '—— Hardware Store', 'motor-grit' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'motor-grit' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'motor-grit' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'motor-grit' ),
			'LiquorStore'         => __( '—— Liquor Store', 'motor-grit' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'motor-grit' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'motor-grit' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'motor-grit' ),
			'MusicStore'          => __( '—— Music Store', 'motor-grit' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'motor-grit' ),
			'OutletStore'         => __( '—— Outlet Store', 'motor-grit' ),
			'PawnShop'            => __( '—— Pawn Shop', 'motor-grit' ),
			'PetStore'            => __( '—— Pet Store', 'motor-grit' ),
			'ShoeStore'           => __( '—— Shoe Store', 'motor-grit' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'motor-grit' ),
			'TireShop'            => __( '—— Tire Shop', 'motor-grit' ),
			'ToyStore'            => __( '—— Toy Store', 'motor-grit' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'motor-grit' ),

		'TelevisionStation'        => __( '— Television Station', 'motor-grit' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'motor-grit' ),
		'TravelAgency'             => __( '— Travel Agency', 'motor-grit' ),

	'MedicalOrganization' => __( 'Medical Organization', 'motor-grit' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'motor-grit' ),
	'PerformingGroup'     => __( 'Performing Group', 'motor-grit' ),
	'SportsOrganization'  => __( 'Sports Organization', 'motor-grit' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'motor-grit' ) )
);
$html .= '</p>';

echo $html;
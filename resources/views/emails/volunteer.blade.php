<!DOCTYPE html>
<html>
<head>
    <title>New Volunteer Form Submission</title>
</head>
<body>
    <h2>New Volunteer Submission</h2>

    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Surname:</strong> {{ $formData['surname'] }}</p>
    <p><strong>Cell:</strong> {{ $formData['cell'] }}</p>
    <p><strong>Alternative Phone Number:</strong> {{ $formData['alternative_number'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Date of Birth:</strong> {{ $formData['date_of_birth'] }}</p>
    <p><strong>ID Number:</strong> {{ $formData['id_number'] ?? 'N/A' }}</p>
    <p><strong>Gender:</strong> {{ $formData['gender'] }}</p>
    <p><strong>Country:</strong> {{ $formData['country'] }}</p>
    <p><strong>Address 1:</strong> {{ $formData['addres_1'] }}</p>
    <p><strong>Address 2:</strong> {{ $formData['address_2'] ?? 'N/A' }}</p>
    <p><strong>Suburb:</strong> {{ $formData['suburb'] }}</p>
    <p><strong>Postal Code:</strong> {{ $formData['postal_code'] ?? 'N/A' }}</p>
    <p><strong>City:</strong> {{ $formData['city'] ?? 'N/A' }}</p>
    <p><strong>Province:</strong> {{ $formData['province'] }}</p>

    <h3>Occupational Details</h3>
    <p><strong>Volunteer Work:</strong> {{ $formData['volunteer_work'] }}</p>
    <p><strong>Employment Type:</strong> {{ $formData['employment_type'] }}</p>
    <p><strong>Volunteer Experience:</strong> {{ $formData['volunteer_experience'] ?? 'N/A' }}</p>
    <p><strong>Work Experience:</strong> {{ $formData['work_experience'] ?? 'N/A' }}</p>
    <p><strong>Education:</strong> {{ $formData['education'] ?? 'N/A' }}</p>
    <p><strong>Involved in SABR Bank:</strong> {{ $formData['involved'] }}</p>
    <p><strong>Health Care Professional:</strong> {{ $formData['health_care_prof'] }}</p>

    <h3>Transport & Availability</h3>
    <p><strong>Driver’s Licence:</strong> {{ $formData['drivers_license'] }}</p>
    <p><strong>Own Transport:</strong> {{ $formData['own_transport'] }}</p>
    <p><strong>Vehicle Offering Consent:</strong> {{ $formData['vehicle_offering'] }}</p>
    <p><strong>Commencement Date:</strong> {{ $formData['commencement_date'] ?? 'N/A' }}</p>
    <p><strong>Location:</strong> {{ $formData['location'] }}</p>
    <p><strong>Itinerary:</strong> {{ $formData['itinerary'] ?? 'N/A' }}</p>
    <p><strong>Hope to Gain from Volunteering:</strong> {{ $formData['hope_to_gain'] ?? 'N/A' }}</p>
    <p><strong>Current Employer Details:</strong> {{ $formData['current_employer_details'] ?? 'N/A' }}</p>

    <h3>Consent & Communication</h3>
    <p><strong>Preferred Communication Method:</strong> {{ $formData['communication_method'] }}</p>
    <p><strong>Consent to Communication:</strong> {{ $formData['communication_consent'] }}</p>
    <p><strong>POPIA Consent:</strong> {{ $formData['popia_consent'] }}</p>
</body>
</html>

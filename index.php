<?php
require 'Manage Marriage Request/manageApplicationController.php';

// create objects
// $manageApplicationControllerObj = new manageApplicationController();

$root = "/ZAN-System";
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    //navbartop
    "$root/notification" => "notification.php",
    "$root/contact" => "contact.php",


    //login
    "$root/" => "login/loginForm.php",
    "$root/logincheck" => "login/login.php",
    "$root/register" => "registration/registrationForm.php",
    "$root/forgotPass" => "login/forgotPasswordForm.php",

    //registration
    "$root/register" => "registration/registrationForm.php",

    //manage marriage request applicant
    "$root/applicantView" => "Manage Marriage Request/Applicant/applicantForm.php",
    "$root/spouseView" => "Manage Marriage Request/Applicant/spouseForm.php",
    "$root/uploadDocView" => "Manage Marriage Request/Applicant/uploadDocForm.php",
    "$root/marriageView" => "Manage Marriage Request/Applicant/marriageForm.php",
    //manage marriage request staff
    "$root/marriageApplicationListView" => "Manage Marriage Request/Staff/viewApplicationListForm.php",
    "$root/marriageApprovedApplicationView" => "Manage Marriage Request/Staff/viewApprovedApplication.php",
    "$root/marriageMoreDetailView" => "Manage Marriage Request/Staff/viewMoreDetail.php",

    //manage marriage registration applicant
    "$root/marriageRegisterView" => "Manage Marriage Registration/Applicant/DocumentForm.php",
    "$root/marriageRegisterTypeView" => "Manage Marriage Registration/Applicant/MarriageTypeForm.php",
    //manage marriage registration staff
    "$root/marriageRegisterUpdateView" => "Manage Marriage Registration/Staff/UpdateRegForm.php",

    //manage pre-marriage course application applicant
    "$root/pre-marriagePaymentView" => "Manage Pre-marriage Course Application/Applicant/paymentForm.php",
    "$root/pre-marriageRegisterView" => "Manage Pre-marriage Course Application/Applicant/regForm.php",
    //manage pre-marriage course application staff
    "$root/pre-marriageApprovalView" => "Manage Pre-marriage Course Application/Staff/approvalForm.php",
    "$root/pre-marriageAttendanceView" => "Manage Pre-marriage Course Application/Staff/attendanceForm.php",

    //manage pre-marriage course organization applicant
    "$root/pre-marriageOrganizationView" => "Manage Pre-marriage Course Organization/Applicant/viewOrganizationList.php",
    //manage pre-marriage course organization staff
    "$root/pre-marriageEditCourseInfoView" => "Manage Pre-marriage Course Organization/Staff/editCourseInfoForm.php",
    "$root/pre-marriageEditVenueView" => "Manage Pre-marriage Course Organization/Staff/editVenueForm.php",
    "$root/pre-marriageRegisterCourseInfoView" => "Manage Pre-marriage Course Organization/Staff/regCourseInfoForm.php",
    "$root/pre-marriageRegisterVenueView" => "Manage Pre-marriage Course Organization/Staff/regVenueForm.php",

    //manage user profile applicant
    "$root/applicantProfileView" => "Manage User Profile/Applicant/applicantProfileView.php",
    //manage user profile staff
    "$root/createStaffAccView" => "Manage User Profile/Staff/createStaffAccount.php",
    "$root/staffEditView" => "Manage User Profile/Staff/staffEditForm.php",
    "$root/staffProfileView" => "Manage User Profile/Staff/staffProfileView.php",
    "$root/applicantProfileView" => "Manage User Profile/Staff/viewApplicationProfile.php",

    //manage booking session applicant
    "$root/consultationBookSessionView" => "ManageBookingSession/Applicant/bookSession.php",
    "$root/consultationCancelBookSessionView" => "ManageBookingSession/Applicant/cancelBookSession.php",
    "$root/consultationUpdateBookSessionView" => "ManageBookingSession/Applicant/updateBookSession.php",
    "$root/consultationProfileView" => "ManageBookingSession/Applicant/viewConsultantProfile.php",
    //manage booking session staff
    "$root/consultationUpdateProfileView" => "ManageBookingSession/Staff/updateConsultantProfile.php",
    "$root/consultationUpdateSessionView" => "ManageBookingSession/Staff/updateSession.php",

    //manage consultation application applicant
    "$root/consultationApplicationView" => "ManageConsultationApplication/Applicant/applicationForm.php",
    "$root/consultationDeleteApplicationView" => "ManageConsultationApplication/Applicant/deleteForm.php",
    "$root/consultationEditApplicationView" => "ManageConsultationApplication/Applicant/editForm.php",
    "$root/consultationSeeApplicationView" => "ManageConsultationApplication/Applicant/viewForm.php",
    //manage consultation application staff
    "$root/consultationFormView" => "ManageBookingSession/Staff/consultationForm.php",

    //manage incentive registration applicant
    "$root/incentiveApplicationFormView" => "ManageIncentiveRegistration/Applicant/applicationForm.php",
    "$root/incentiveDocumentPageView" => "ManageIncentiveRegistration/Applicant/documentPage.php",
    "$root/incentiveMaklumatPasanganView" => "ManageIncentiveRegistration/Applicant/maklumatPasangan.php",
    "$root/incentiveMaklumatPemohonView" => "ManageIncentiveRegistration/Applicant/maklumatPemohon.php",
    "$root/incentiveRegistrationView" => "ManageIncentiveRegistration/Applicant/manageIncentiveRegistration.php",
    "$root/incentiveController" => "ManageIncentiveRegistration/Applicant/incentiveController.php",
    //manage incentive registration staff
    "$root/incentiveStaffDocumentPageView" => "ManageIncentiveRegistration/Staff/documentPage.php",
    "$root/incentiveStaffMaklumatPemohonView" => "ManageIncentiveRegistration/Staff/maklumatPemohon.php",
    "$root/incentiveStaffUpdateRegFormView" => "ManageIncentiveRegistration/Staff/updateRegForm.php",
    "$root/incentiveStaffUpdateRegView" => "ManageIncentiveRegistration/Staff/updateRegistration.php",

    //manage marriage incentive applicant
    "$root/marriageIncentiveApplicationStatusView" => "ManageMarriageIncentive/Applicant/applicationStatus.php",
    "$root/marriageIncentiveDeleteFormView" => "ManageMarriageIncentive/Applicant/deleteForm.php",
    "$root/marriageIncentiveUpdateFormView" => "ManageMarriageIncentive/Applicant/updateForm.php",
    "$root/marriageIncentiveFormView" => "ManageMarriageIncentive/Applicant/viewForm.php",
    //manage marriage incentive staff
    "$root/marriageIncentiveStaffDocumentPageView" => "ManageMarriageIncentive/Staff/documentPage.php",
    "$root/marriageIncentiveStaffFormView" => "ManageMarriageIncentive/Staff/IncentiveForm.php",
    "$root/marriageIncentiveStaffMaklumatPemohonView" => "ManageMarriageIncentive/Staff/maklumatPemohon.php",

    //manage certificate card request applicant
    "$root/certCardRequestFormView" => "Marriage Certificate & Card Request/Applicant/RequestForm.php",
    //manage certificate card request staff
    "$root/certCardStatusFormView" => "Marriage Certificate & Card Request/Staff/CardStatusForm.php",
    "$root/certCardGenerateCardFormView" => "Marriage Certificate & Card Request/Staff/GenerateCardForm.php",
    "$root/certCardGeerateCertFormView" => "Marriage Certificate & Card Request/Staff/GenerateCertForm.php",

    //manage payment proof applicant
    "$root/paymentProofView" => "PaymentProof/Applicant/PaymentProofForm.php",
    //manage payment proof staff
    "$root/paymentProofApprovalView" => "PaymentProof/Staff/ViewProofForm.php",


];

function route($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = '404')
{
    http_response_code($code);
    echo "NOT FOUND";
    die();
}

route($uri, $routes);

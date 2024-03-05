<!DOCTYPE html>
<html>

<head>
    <title>The Logic Hive</title>
</head>

<body>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Contact :</strong> {{ $contact }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    @if (@$packages)
        <p><strong>Packages :</strong> {{ @$packages }}</p>
    @endif
    @if (@$amount)
        <p><strong>Amount :</strong> {{ @$amount }}</p>
    @endif

    @if (@$country)
        <p><strong>Country :</strong> {{ @$country }}</p>
    @endif

    @if (@$pageurl)
        <p><strong>Page Url :</strong> {{ @$pageurl }}</p>
    @endif

    @if (@$description)
    <p> {{ @$description }}</p>
    @endif

    

    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}

    <p>Thank you</p>
</body>

</html>

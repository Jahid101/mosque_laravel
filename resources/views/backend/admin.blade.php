<!doctype html>
<html lang="en">


@include('backend.partial.head')


<body>



    @include('backend.partial.header')



    <div class="container-fluid">
        <div class="row">

            @include('backend.partial.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">ABC Mosque</h1>
                </div>



                @yield('about')

                @yield('donate')




            </main>
        </div>
    </div>



    @include('backend.partial.script')



</body>

</html>

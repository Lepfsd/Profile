[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

# Profile module
This module add User Profile capabilities on your wonderful Asgard CMS!

So you got this functionality:
* User profile
* Add this code at your /Themes/Flatly/views/partials/navigation.blade.php
``` php
<ul class="nav navbar-nav navbar-right"  >

                   <li class="dropdown  {{ on_route('user.account')  ? 'active' : '' }}">
                       <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button">Account</a>
                       <ul class="dropdown-menu" role="menu">

                          <?php if ($user): ?>
                           <li class="{{ on_route('user.account') ? 'active' : '' }}"><a href="{{ route('user.account') }}">Account</a></li>
                           <?php if ($user->hasRoleName('Admin')): ?>
                               <li><a href="{{ route('dashboard.index') }}">Admin</a></li>
                           <?php endif; ?>
                           <li><a href="{{ route('logout') }}">Logout</a></li>

                         <?php else: ?>
                           <li class="{{ Request::is('*auth/login') ? 'active' : ''}}"><a href="{{ route('login') }}">Login</a></li>
                           <li class="{{ Request::is('*auth/register') ? 'active' : ''}}"><a href="{{ route('register') }}">Register</a></li>

                          <?php endif; ?>

                        </ul>
                   </li>


</ul>
```

## Installation
Follow the [installation guide of module](https://asgardcms.com/en/docs/getting-started/installation#installing-modules-and-themes), with module name "abada/prfile".



 If you want to install it on standalone you can follow the steps.

### Composer requirement

``` json
composer require abada/profile
```

### Package migrations

Run the migrations:

``` bash
php artisan module:migrate Profile
```

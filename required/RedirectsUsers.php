<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath($redirectTo = null)
    {
        if($redirectTo != null){
            return $redirectTo;
        }else{
            if (method_exists($this, 'redirectTo')) {
                return $this->redirectTo();
            }

            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';      
        }
    }
}
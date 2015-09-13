<?php namespace Modules\Profile\Http\Controllers\Frontend;
use Modules\Core\Contracts\Authentication;
use Modules\Profile\Http\Requests\UpdateProfileRequest;
use Modules\User\Repositories\UserRepository;
use Modules\Core\Http\Controllers\BasePublicController;
class ProfileController extends BasePublicController
{
    /**
     * @var EntryRepository
     */
    private $entry;
    /**
     * @var UserRepository
     */
    private $user;
    /**
     * @param Authentication $auth

     * @param UserRepository $user
     */
    public function __construct(
        Authentication $auth,

        UserRepository $user
    )
    {
        parent::__construct();
        $this->auth = $auth;

        $this->user = $user;
    }
    /**
     *
     */
    public function show()
    {
        $user = $this->auth->check();
        return view('profile::public.profile', compact('user'));
    }
    public function update(UpdateProfileRequest $request)
    {
        $this->user->update($this->auth->check(), $request->all());
        return redirect()->route('user.account')->with('success', 'Profile updated');
    }
   
}

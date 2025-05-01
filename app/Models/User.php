<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Namu\WireChat\Traits\Chatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Chatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Returns the URL for the user's cover image (avatar).
     * Adjust the 'avatar_url' field to your database setup.
     */
    public function getCoverUrlAttribute(): ?string
    {
        return $this->avatar_url ?? null;
    }

    /**
     * Returns the URL for the user's profile page.
     * Adjust the 'profile' route as needed for your setup.
     */
    public function getProfileUrlAttribute(): ?string
    {
        return route('profile', ['id' => $this->id]);
    }

    /**
     * Returns the display name for the user.
     * Modify this to use your preferred name field.
     */
    public function getDisplayNameAttribute(): ?string
    {
        return $this->name ?? 'user';
    }

    /**
     * Search for users when creating a new chat or adding members to a group.
     * Customize the search logic to limit results, such as restricting to friends or eligible users only.
     */
    public function searchChatables(string $query): ?Collection
    {
        $searchableFields = ['name'];
        return User::where(function ($queryBuilder) use ($searchableFields, $query) {
            foreach ($searchableFields as $field) {
                $queryBuilder->orWhere($field, 'LIKE', '%' . $query . '%');
            }
        })
            ->limit(20)
            ->get();
    }
    
    public function canCreateChats(): bool
    {
        return $this->hasVerifiedEmail();
    }

    public function canCreateGroups(): bool
    {
        return $this->hasVerifiedEmail() === true;
    }

    public function canSendMessages(): bool
    {
        return $this->hasVerifiedEmail() === true;
    }
}

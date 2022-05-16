<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'name',
        'type_animal;',
        'owner',
        'address'
    ];

    /* public function users()
    {
        return $this->hasMany(User::class, 'pet_id', 'id');
    }

    public function getMembersCount()
    {
        if (empty($this->users) || is_null($this->users)) {
            return 0;
        }
        return $this->users->count();
    } */

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type_animal;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getAddress()
    {
        return $this->address;
    }

    /* public function getWebsiteURL()
    {
        return $this->website_url;
    } */

    public function setName($value)
    {
        // UPDATE pets SET name=$value
        $this->name = $value;
        return $this->save();
    }

    public function setType($value)
    {
        // UPDATE pets SET animal_type=$value
        $this->type_animal = $value;
        return $this->save();
    }

    public function setOwner($value)
    {
        $this->owner = $value;
        return $this->save();
    }

    public function setAddress($value)
    {
        $this->address = $value;
        return $this->save();
    }

    /* public function setWebsiteURL($value)
    {
        $this->website_url = $value;
        return $this->save();
    } */

    public function isMammal()
    {
        return ($this->type_animal == 'mammal');
    }

    public function isBird()
    {
        return ($this->type_animal == 'bird');
    }

    public function isFish()
    {
        return ($this->type_animal == 'fish');
    }

    public function isReptile()
    {
        return ($this->type_animal == 'reptile');
    }

    public function isAmphibian()
    {
        return ($this->type_animal == 'amphibian');
    }

    public function isArthropod()
    {
        return ($this->type_animal == 'arthropod');
    }

    public function isInsect()
    {
        return ($this->type_animal == 'insect');
    }

    public function isArachnid()
    {
        return ($this->type_animal == 'arachnid');
    }

    public function isCrustacean()
    {
        return ($this->type_animal == 'crustacean');
    }

    public function isWorm()
    {
        return ($this->type_animal == 'worm');
    }

    public function isMollusk()
    {
        return ($this->type_animal == 'mollusk');
    }

    public function isSponge()
    {
        return ($this->type_animal == 'sponge');
    }

    public function isEchinoderm()
    {
        return ($this->type_animal == 'echinoderm');
    }
}

<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 10:34 24.09.2019
 */

namespace DataCollection\Models\Subscriber;

use Carbon\Carbon;
use Faker\Factory;
use DataCollection\Connection;
use DataCollection\Models\AbstractModel;
use DataCollection\Traits\ReferenceIdFindableTrait;
use DataCollection\Traits\StoreTrait;
use DataCollection\Traits\UidFindableTrait;
use DataCollection\Traits\UpdateTrait;

class Subscriber extends AbstractModel implements \JsonSerializable
{
    use UidFindableTrait;
    use ReferenceIdFindableTrait;
    use StoreTrait;
    const VERSION = 'v1';
    const MODEL = 'subscriber';
    const MODELS = 'subscribers';
    /**
     * @var string
     */
    protected $account_id;
    /**
     * @var string
     */
    protected $list;
    /**
     * @var int|null
     */
    protected $birth_year;
    /**
     * @var int|null
     */
    protected $birth_month;
    /**
     * @var int|null
     */
    protected $birth_day;
    /**
     * @var int|null
     */
    protected $age;
    /**
     * @var string|null
     */
    protected $zip_code;
    /**
     * @var string|null
     */
    protected $city;
    /**
     * @var string|null
     */
    protected $street;
    /**
     * @var float|null
     */
    protected $population_size;
    /**
     * @var string|null
     */
    protected $first_name;
    /**
     * @var string|null
     */
    protected $sur_name;
    /**
     * @var string|null
     */
    protected $gender;
    /**
     * @var string|null
     */
    protected $phone;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var int|null
     */
    protected $household_members;
    /**
     * @var bool|null
     */
    protected $kids_3;
    /**
     * @var bool|null
     */
    protected $kids_4_6;
    /**
     * @var bool|null
     */
    protected $kids_7_12;
    /**
     * @var bool|null
     */
    protected $kids_13_17;
    /**
     * @var string|null
     */
    protected $economical_status;
    /**
     * @var int|null
     */
    protected $household_income;
    /**
     * @var bool|null
     */
    protected $car;
    /**
     * @var bool|null
     */
    protected $house;
    /**
     * @var bool|null
     */
    protected $smartphone;
    /**
     * @var bool|null
     */
    protected $data_plan;
    /**
     * @var string|null
     */
    protected $internet_usage;
    protected static $LISTS = null;

    /**
     * Subscriber constructor.
     * @param string $account_id
     * @param string $list
     * @param int|null $id
     * @param string|null $uid
     * @param int|null $birth_year
     * @param int|null $birth_month
     * @param int|null $birth_day
     * @param int|null $age
     * @param string|null $zip_code
     * @param string|null $city
     * @param string|null $street
     * @param float|null $population_size
     * @param string|null $first_name
     * @param string|null $sur_name
     * @param string|null $gender
     * @param string|null $phone
     * @param string|null $email
     * @param int|null $household_members
     * @param bool|null $kids_3
     * @param bool|null $kids_4_6
     * @param bool|null $kids_7_12
     * @param bool|null $kids_13_17
     * @param string|null $economical_status
     * @param int|null $household_income
     * @param bool|null $car
     * @param bool|null $house
     * @param bool|null $smartphone
     * @param bool|null $data_plan
     * @param string|null $internet_usage
     * @param Carbon|null $created_at
     * @param Carbon|null $updated_at
     * @param Carbon|null $deleted_at
     */
    public function __construct(string $account_id, string $list, ?int $id, ?string $uid, ?int $birth_year, ?int $birth_month, ?int $birth_day, ?int $age, ?string $zip_code, ?string $city, ?string $street, ?float $population_size, ?string $first_name, ?string $sur_name, ?string $gender, ?string $phone, ?string $email, ?int $household_members, ?bool $kids_3, ?bool $kids_4_6, ?bool $kids_7_12, ?bool $kids_13_17, ?string $economical_status, ?int $household_income, ?bool $car, ?bool $house, ?bool $smartphone, ?bool $data_plan, ?string $internet_usage, ?Carbon $created_at = null, ?Carbon $updated_at = null, ?Carbon $deleted_at = null)
    {
        parent::__construct($id, $uid, $created_at, $updated_at, $deleted_at);
        $this->account_id = $account_id;
        $this->list = $list;
        $this->birth_year = $birth_year;
        $this->birth_month = $birth_month;
        $this->birth_day = $birth_day;
        $this->age = $age;
        $this->zip_code = $zip_code;
        $this->city = $city;
        $this->street = $street;
        $this->population_size = $population_size;
        $this->first_name = $first_name;
        $this->sur_name = $sur_name;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->email = $email;
        $this->household_members = $household_members;
        $this->kids_3 = $kids_3;
        $this->kids_4_6 = $kids_4_6;
        $this->kids_7_12 = $kids_7_12;
        $this->kids_13_17 = $kids_13_17;
        $this->economical_status = $economical_status;
        $this->household_income = $household_income;
        $this->car = $car;
        $this->house = $house;
        $this->smartphone = $smartphone;
        $this->data_plan = $data_plan;
        $this->internet_usage = $internet_usage;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'account_id'        => $this->account_id,
            'list'              => $this->list,
            'birth_year'        => $this->birth_year,
            'birth_month'       => $this->birth_month,
            'birth_day'         => $this->birth_day,
            'age'               => $this->age,
            'zip_code'          => $this->zip_code,
            'city'              => $this->city,
            'street'            => $this->street,
            'population_size'   => $this->population_size,
            'first_name'        => $this->first_name,
            'sur_name'          => $this->sur_name,
            'gender'            => mb_strtoupper($this->gender),
            'phone'             => $this->phone,
            'email'             => $this->email,
            'household_members' => $this->household_members,
            'kids_3'            => $this->kids_3,
            'kids_4_6'          => $this->kids_4_6,
            'kids_7_12'         => $this->kids_7_12,
            'kids_13_17'        => $this->kids_13_17,
            'economical_status' => $this->economical_status,
            'household_income'  => $this->household_income,
            'car'               => $this->car,
            'house'             => $this->house,
            'smartphone'        => $this->smartphone,
            'data_plan'         => $this->data_plan,
            'internet_usage'    => $this->internet_usage
        ];
    }

    public static function create($row)
    {
        return new self($row['account_id'], $row['list'], $row['id'], $row['uid'], $row['birth_year'], $row['birth_month'], $row['birth_day'], $row['age'], $row['zip_code'], $row['city'], $row['street'], $row['population_size'], $row['first_name'], $row['sur_name'], $row['gender'], $row['phone'], $row['email'], $row['household_members'], $row['kids_3'], $row['kids_4_6'], $row['kids_7_12'], $row['kids_13_17'], $row['economical_status'], $row['household_income'], $row['car'], $row['house'], $row['smartphone'], $row['data_plan'], $row['internet_usage'], is_null($row['created_at']) ? null : new Carbon($row['created_at']), is_null($row['updated_at']) ? null : new Carbon($row['updated_at']), null);
    }

    public static function example()
    {
        $faker = Factory::create();
        $birth = Carbon::now();
        $birth->subYears(rand(20, 25));
        $birth->subMonths(rand(6, 10));
        $birth->subDays(rand(10, 20));

        return new Subscriber($faker->numberBetween(100000, 999999), self::lists()[array_rand(self::lists())], null, null, $birth->year, $birth->month, $birth->day, null, rand(10000, 99999), $faker->city, $faker->streetAddress, null, $faker->firstName, $faker->lastName, array_rand(SubscriberGenderEnumeration::ENUM), $faker->phoneNumber, $faker->email, $faker->numberBetween(1, 4), $faker->boolean, $faker->boolean, $faker->boolean, $faker->boolean, array_rand(SubscriberEconomicalStatusEnumeration::ENUM), $faker->numberBetween(10, 100), $faker->boolean, $faker->boolean, $faker->boolean, $faker->boolean, array_rand(SubscriberInternetUsageEnumeration::ENUM));
    }

    public static function lists($refresh = false)
    {
        if (is_null(self::$LISTS) || $refresh) {
            self::$LISTS = json_decode(static::method('list', []), true)['lists'];
        }

        return self::$LISTS;
    }

    public function updateByListAndAccountId()
    {
        $result = json_decode(Connection::patch(static::VERSION . '/'  . static::MODEL . '/' . $this->list .  '/' . $this->account_id . '/update', $this->jsonSerialize())->getBody()->getContents(), true);
        $result[static::MODEL] = static::create($result[static::MODEL]);
        return $result;
    }

    public static function findByListAndAccountId($list, $account_id)
    {
        $result = json_decode(Connection::get(static::VERSION . '/'  . static::MODEL . '/' . $list .  '/' . $account_id . '/find')->getBody()->getContents(), true);
        $result[static::MODEL] = static::create($result[static::MODEL]);
        return $result;
    }
}
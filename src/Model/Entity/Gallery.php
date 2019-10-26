<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gallery Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string|null $thumb
 * @property \Cake\I18n\FrozenTime $modified
 */
class Gallery extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'image' => true,
        'thumb' => true,
        'modified' => true
    ];
}

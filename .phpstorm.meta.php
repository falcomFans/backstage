<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Mongo' instanceof Think\Model\MongoModel,
			'View' instanceof Think\Model\ViewModel,
			'Role' instanceof Admin\Model\RoleModel,
			'Member' instanceof Admin\Model\MemberModel,
			'Adv' instanceof Think\Model\AdvModel,
			'Type' instanceof Admin\Model\TypeModel,
			'Auth' instanceof Admin\Model\AuthModel,
			'Relation' instanceof Think\Model\RelationModel,
			'Attribute' instanceof Admin\Model\AttributeModel,
			'Manager' instanceof Admin\Model\ManagerModel,
			'User' instanceof Home\Model\UserModel,
			'Goods' instanceof Home\Model\GoodsModel,
			'Merge' instanceof Think\Model\MergeModel,
		],
	];
}
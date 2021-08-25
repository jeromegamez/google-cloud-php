<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update an environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.UpdateEnvironmentRequest</code>
 */
class UpdateEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative resource name of the environment to update, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * A patch environment. Fields specified by the `updateMask` will be copied
     * from the patch environment into the environment under update.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment environment = 1;</code>
     */
    private $environment = null;
    /**
     * Required. A comma-separated list of paths, relative to `Environment`, of
     * fields to update.
     * For example, to set the version of scikit-learn to install in the
     * environment to 0.19.0 and to remove an existing installation of
     * numpy, the `updateMask` parameter would include the following two
     * `paths` values: "config.softwareConfig.pypiPackages.scikit-learn" and
     * "config.softwareConfig.pypiPackages.numpy". The included patch
     * environment would specify the scikit-learn version as follows:
     *     {
     *       "config":{
     *         "softwareConfig":{
     *           "pypiPackages":{
     *             "scikit-learn":"==0.19.0"
     *           }
     *         }
     *       }
     *     }
     * Note that in the above example, any existing PyPI packages
     * other than scikit-learn and numpy will be unaffected.
     * Only one update type may be included in a single request's `updateMask`.
     * For example, one cannot update both the PyPI packages and
     * labels in the same request. However, it is possible to update multiple
     * members of a map field simultaneously in the same request. For example,
     * to set the labels "label1" and "label2" while clearing "label3" (assuming
     * it already exists), one can
     * provide the paths "labels.label1", "labels.label2", and "labels.label3"
     * and populate the patch environment as follows:
     *     {
     *       "labels":{
     *         "label1":"new-label1-value"
     *         "label2":"new-label2-value"
     *       }
     *     }
     * Note that in the above example, any existing labels that are not
     * included in the `updateMask` will be unaffected.
     * It is also possible to replace an entire map field by providing the
     * map field's path in the `updateMask`. The new value of the field will
     * be that which is provided in the patch environment. For example, to
     * delete all pre-existing user-specified PyPI packages and
     * install botocore at version 1.7.14, the `updateMask` would contain
     * the path "config.softwareConfig.pypiPackages", and
     * the patch environment would be the following:
     *     {
     *       "config":{
     *         "softwareConfig":{
     *           "pypiPackages":{
     *             "botocore":"==1.7.14"
     *           }
     *         }
     *       }
     *     }
     * **Note:** Only the following fields can be updated:
     * * `config.softwareConfig.pypiPackages`
     *     * Replace all custom custom PyPI packages. If a replacement
     *       package map is not included in `environment`, all custom
     *       PyPI packages are cleared. It is an error to provide both
     *       this mask and a mask specifying an individual package.
     * * `config.softwareConfig.pypiPackages.`packagename
     *     * Update the custom PyPI package *packagename*,
     *       preserving other packages. To delete the package, include it in
     *       `updateMask`, and omit the mapping for it in
     *       `environment.config.softwareConfig.pypiPackages`. It is an error
     *       to provide both a mask of this form and the
     *       `config.softwareConfig.pypiPackages` mask.
     * * `labels`
     *     * Replace all environment labels. If a replacement labels map is not
     *       included in `environment`, all labels are cleared. It is an error to
     *       provide both this mask and a mask specifying one or more individual
     *       labels.
     * * `labels.`labelName
     *     * Set the label named *labelName*, while preserving other
     *       labels. To delete the label, include it in `updateMask` and omit its
     *       mapping in `environment.labels`. It is an error to provide both a
     *       mask of this form and the `labels` mask.
     * * `config.nodeCount`
     *     * Horizontally scale the number of nodes in the environment. An integer
     *       greater than or equal to 3 must be provided in the `config.nodeCount`
     *       field.
     * * `config.webServerNetworkAccessControl`
     *     * Replace the environment's current `WebServerNetworkAccessControl`.
     * * `config.databaseConfig`
     *     * Replace the environment's current `DatabaseConfig`.
     * * `config.webServerConfig`
     *     * Replace the environment's current `WebServerConfig`.
     * * `config.softwareConfig.airflowConfigOverrides`
     *     * Replace all Apache Airflow config overrides. If a replacement config
     *       overrides map is not included in `environment`, all config overrides
     *       are cleared.
     *       It is an error to provide both this mask and a mask specifying one or
     *       more individual config overrides.
     * * `config.softwareConfig.airflowConfigOverrides.`section-name
     *     * Override the Apache Airflow config property *name* in the
     *       section named *section*, preserving other properties. To
     *       delete the property override, include it in `updateMask` and omit its
     *       mapping in
     *       `environment.config.softwareConfig.airflowConfigOverrides`.
     *       It is an error to provide both a mask of this form and the
     *       `config.softwareConfig.airflowConfigOverrides` mask.
     * * `config.softwareConfig.envVariables`
     *     * Replace all environment variables. If a replacement environment
     *       variable map is not included in `environment`, all custom environment
     *       variables  are cleared.
     *       It is an error to provide both this mask and a mask specifying one or
     *       more individual environment variables.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The relative resource name of the environment to update, in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\Environment $environment
     *           A patch environment. Fields specified by the `updateMask` will be copied
     *           from the patch environment into the environment under update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A comma-separated list of paths, relative to `Environment`, of
     *           fields to update.
     *           For example, to set the version of scikit-learn to install in the
     *           environment to 0.19.0 and to remove an existing installation of
     *           numpy, the `updateMask` parameter would include the following two
     *           `paths` values: "config.softwareConfig.pypiPackages.scikit-learn" and
     *           "config.softwareConfig.pypiPackages.numpy". The included patch
     *           environment would specify the scikit-learn version as follows:
     *               {
     *                 "config":{
     *                   "softwareConfig":{
     *                     "pypiPackages":{
     *                       "scikit-learn":"==0.19.0"
     *                     }
     *                   }
     *                 }
     *               }
     *           Note that in the above example, any existing PyPI packages
     *           other than scikit-learn and numpy will be unaffected.
     *           Only one update type may be included in a single request's `updateMask`.
     *           For example, one cannot update both the PyPI packages and
     *           labels in the same request. However, it is possible to update multiple
     *           members of a map field simultaneously in the same request. For example,
     *           to set the labels "label1" and "label2" while clearing "label3" (assuming
     *           it already exists), one can
     *           provide the paths "labels.label1", "labels.label2", and "labels.label3"
     *           and populate the patch environment as follows:
     *               {
     *                 "labels":{
     *                   "label1":"new-label1-value"
     *                   "label2":"new-label2-value"
     *                 }
     *               }
     *           Note that in the above example, any existing labels that are not
     *           included in the `updateMask` will be unaffected.
     *           It is also possible to replace an entire map field by providing the
     *           map field's path in the `updateMask`. The new value of the field will
     *           be that which is provided in the patch environment. For example, to
     *           delete all pre-existing user-specified PyPI packages and
     *           install botocore at version 1.7.14, the `updateMask` would contain
     *           the path "config.softwareConfig.pypiPackages", and
     *           the patch environment would be the following:
     *               {
     *                 "config":{
     *                   "softwareConfig":{
     *                     "pypiPackages":{
     *                       "botocore":"==1.7.14"
     *                     }
     *                   }
     *                 }
     *               }
     *           **Note:** Only the following fields can be updated:
     *           * `config.softwareConfig.pypiPackages`
     *               * Replace all custom custom PyPI packages. If a replacement
     *                 package map is not included in `environment`, all custom
     *                 PyPI packages are cleared. It is an error to provide both
     *                 this mask and a mask specifying an individual package.
     *           * `config.softwareConfig.pypiPackages.`packagename
     *               * Update the custom PyPI package *packagename*,
     *                 preserving other packages. To delete the package, include it in
     *                 `updateMask`, and omit the mapping for it in
     *                 `environment.config.softwareConfig.pypiPackages`. It is an error
     *                 to provide both a mask of this form and the
     *                 `config.softwareConfig.pypiPackages` mask.
     *           * `labels`
     *               * Replace all environment labels. If a replacement labels map is not
     *                 included in `environment`, all labels are cleared. It is an error to
     *                 provide both this mask and a mask specifying one or more individual
     *                 labels.
     *           * `labels.`labelName
     *               * Set the label named *labelName*, while preserving other
     *                 labels. To delete the label, include it in `updateMask` and omit its
     *                 mapping in `environment.labels`. It is an error to provide both a
     *                 mask of this form and the `labels` mask.
     *           * `config.nodeCount`
     *               * Horizontally scale the number of nodes in the environment. An integer
     *                 greater than or equal to 3 must be provided in the `config.nodeCount`
     *                 field.
     *           * `config.webServerNetworkAccessControl`
     *               * Replace the environment's current `WebServerNetworkAccessControl`.
     *           * `config.databaseConfig`
     *               * Replace the environment's current `DatabaseConfig`.
     *           * `config.webServerConfig`
     *               * Replace the environment's current `WebServerConfig`.
     *           * `config.softwareConfig.airflowConfigOverrides`
     *               * Replace all Apache Airflow config overrides. If a replacement config
     *                 overrides map is not included in `environment`, all config overrides
     *                 are cleared.
     *                 It is an error to provide both this mask and a mask specifying one or
     *                 more individual config overrides.
     *           * `config.softwareConfig.airflowConfigOverrides.`section-name
     *               * Override the Apache Airflow config property *name* in the
     *                 section named *section*, preserving other properties. To
     *                 delete the property override, include it in `updateMask` and omit its
     *                 mapping in
     *                 `environment.config.softwareConfig.airflowConfigOverrides`.
     *                 It is an error to provide both a mask of this form and the
     *                 `config.softwareConfig.airflowConfigOverrides` mask.
     *           * `config.softwareConfig.envVariables`
     *               * Replace all environment variables. If a replacement environment
     *                 variable map is not included in `environment`, all custom environment
     *                 variables  are cleared.
     *                 It is an error to provide both this mask and a mask specifying one or
     *                 more individual environment variables.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative resource name of the environment to update, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The relative resource name of the environment to update, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A patch environment. Fields specified by the `updateMask` will be copied
     * from the patch environment into the environment under update.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment environment = 1;</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\Environment|null
     */
    public function getEnvironment()
    {
        return isset($this->environment) ? $this->environment : null;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * A patch environment. Fields specified by the `updateMask` will be copied
     * from the patch environment into the environment under update.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment environment = 1;</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\Environment::class);
        $this->environment = $var;

        return $this;
    }

    /**
     * Required. A comma-separated list of paths, relative to `Environment`, of
     * fields to update.
     * For example, to set the version of scikit-learn to install in the
     * environment to 0.19.0 and to remove an existing installation of
     * numpy, the `updateMask` parameter would include the following two
     * `paths` values: "config.softwareConfig.pypiPackages.scikit-learn" and
     * "config.softwareConfig.pypiPackages.numpy". The included patch
     * environment would specify the scikit-learn version as follows:
     *     {
     *       "config":{
     *         "softwareConfig":{
     *           "pypiPackages":{
     *             "scikit-learn":"==0.19.0"
     *           }
     *         }
     *       }
     *     }
     * Note that in the above example, any existing PyPI packages
     * other than scikit-learn and numpy will be unaffected.
     * Only one update type may be included in a single request's `updateMask`.
     * For example, one cannot update both the PyPI packages and
     * labels in the same request. However, it is possible to update multiple
     * members of a map field simultaneously in the same request. For example,
     * to set the labels "label1" and "label2" while clearing "label3" (assuming
     * it already exists), one can
     * provide the paths "labels.label1", "labels.label2", and "labels.label3"
     * and populate the patch environment as follows:
     *     {
     *       "labels":{
     *         "label1":"new-label1-value"
     *         "label2":"new-label2-value"
     *       }
     *     }
     * Note that in the above example, any existing labels that are not
     * included in the `updateMask` will be unaffected.
     * It is also possible to replace an entire map field by providing the
     * map field's path in the `updateMask`. The new value of the field will
     * be that which is provided in the patch environment. For example, to
     * delete all pre-existing user-specified PyPI packages and
     * install botocore at version 1.7.14, the `updateMask` would contain
     * the path "config.softwareConfig.pypiPackages", and
     * the patch environment would be the following:
     *     {
     *       "config":{
     *         "softwareConfig":{
     *           "pypiPackages":{
     *             "botocore":"==1.7.14"
     *           }
     *         }
     *       }
     *     }
     * **Note:** Only the following fields can be updated:
     * * `config.softwareConfig.pypiPackages`
     *     * Replace all custom custom PyPI packages. If a replacement
     *       package map is not included in `environment`, all custom
     *       PyPI packages are cleared. It is an error to provide both
     *       this mask and a mask specifying an individual package.
     * * `config.softwareConfig.pypiPackages.`packagename
     *     * Update the custom PyPI package *packagename*,
     *       preserving other packages. To delete the package, include it in
     *       `updateMask`, and omit the mapping for it in
     *       `environment.config.softwareConfig.pypiPackages`. It is an error
     *       to provide both a mask of this form and the
     *       `config.softwareConfig.pypiPackages` mask.
     * * `labels`
     *     * Replace all environment labels. If a replacement labels map is not
     *       included in `environment`, all labels are cleared. It is an error to
     *       provide both this mask and a mask specifying one or more individual
     *       labels.
     * * `labels.`labelName
     *     * Set the label named *labelName*, while preserving other
     *       labels. To delete the label, include it in `updateMask` and omit its
     *       mapping in `environment.labels`. It is an error to provide both a
     *       mask of this form and the `labels` mask.
     * * `config.nodeCount`
     *     * Horizontally scale the number of nodes in the environment. An integer
     *       greater than or equal to 3 must be provided in the `config.nodeCount`
     *       field.
     * * `config.webServerNetworkAccessControl`
     *     * Replace the environment's current `WebServerNetworkAccessControl`.
     * * `config.databaseConfig`
     *     * Replace the environment's current `DatabaseConfig`.
     * * `config.webServerConfig`
     *     * Replace the environment's current `WebServerConfig`.
     * * `config.softwareConfig.airflowConfigOverrides`
     *     * Replace all Apache Airflow config overrides. If a replacement config
     *       overrides map is not included in `environment`, all config overrides
     *       are cleared.
     *       It is an error to provide both this mask and a mask specifying one or
     *       more individual config overrides.
     * * `config.softwareConfig.airflowConfigOverrides.`section-name
     *     * Override the Apache Airflow config property *name* in the
     *       section named *section*, preserving other properties. To
     *       delete the property override, include it in `updateMask` and omit its
     *       mapping in
     *       `environment.config.softwareConfig.airflowConfigOverrides`.
     *       It is an error to provide both a mask of this form and the
     *       `config.softwareConfig.airflowConfigOverrides` mask.
     * * `config.softwareConfig.envVariables`
     *     * Replace all environment variables. If a replacement environment
     *       variable map is not included in `environment`, all custom environment
     *       variables  are cleared.
     *       It is an error to provide both this mask and a mask specifying one or
     *       more individual environment variables.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. A comma-separated list of paths, relative to `Environment`, of
     * fields to update.
     * For example, to set the version of scikit-learn to install in the
     * environment to 0.19.0 and to remove an existing installation of
     * numpy, the `updateMask` parameter would include the following two
     * `paths` values: "config.softwareConfig.pypiPackages.scikit-learn" and
     * "config.softwareConfig.pypiPackages.numpy". The included patch
     * environment would specify the scikit-learn version as follows:
     *     {
     *       "config":{
     *         "softwareConfig":{
     *           "pypiPackages":{
     *             "scikit-learn":"==0.19.0"
     *           }
     *         }
     *       }
     *     }
     * Note that in the above example, any existing PyPI packages
     * other than scikit-learn and numpy will be unaffected.
     * Only one update type may be included in a single request's `updateMask`.
     * For example, one cannot update both the PyPI packages and
     * labels in the same request. However, it is possible to update multiple
     * members of a map field simultaneously in the same request. For example,
     * to set the labels "label1" and "label2" while clearing "label3" (assuming
     * it already exists), one can
     * provide the paths "labels.label1", "labels.label2", and "labels.label3"
     * and populate the patch environment as follows:
     *     {
     *       "labels":{
     *         "label1":"new-label1-value"
     *         "label2":"new-label2-value"
     *       }
     *     }
     * Note that in the above example, any existing labels that are not
     * included in the `updateMask` will be unaffected.
     * It is also possible to replace an entire map field by providing the
     * map field's path in the `updateMask`. The new value of the field will
     * be that which is provided in the patch environment. For example, to
     * delete all pre-existing user-specified PyPI packages and
     * install botocore at version 1.7.14, the `updateMask` would contain
     * the path "config.softwareConfig.pypiPackages", and
     * the patch environment would be the following:
     *     {
     *       "config":{
     *         "softwareConfig":{
     *           "pypiPackages":{
     *             "botocore":"==1.7.14"
     *           }
     *         }
     *       }
     *     }
     * **Note:** Only the following fields can be updated:
     * * `config.softwareConfig.pypiPackages`
     *     * Replace all custom custom PyPI packages. If a replacement
     *       package map is not included in `environment`, all custom
     *       PyPI packages are cleared. It is an error to provide both
     *       this mask and a mask specifying an individual package.
     * * `config.softwareConfig.pypiPackages.`packagename
     *     * Update the custom PyPI package *packagename*,
     *       preserving other packages. To delete the package, include it in
     *       `updateMask`, and omit the mapping for it in
     *       `environment.config.softwareConfig.pypiPackages`. It is an error
     *       to provide both a mask of this form and the
     *       `config.softwareConfig.pypiPackages` mask.
     * * `labels`
     *     * Replace all environment labels. If a replacement labels map is not
     *       included in `environment`, all labels are cleared. It is an error to
     *       provide both this mask and a mask specifying one or more individual
     *       labels.
     * * `labels.`labelName
     *     * Set the label named *labelName*, while preserving other
     *       labels. To delete the label, include it in `updateMask` and omit its
     *       mapping in `environment.labels`. It is an error to provide both a
     *       mask of this form and the `labels` mask.
     * * `config.nodeCount`
     *     * Horizontally scale the number of nodes in the environment. An integer
     *       greater than or equal to 3 must be provided in the `config.nodeCount`
     *       field.
     * * `config.webServerNetworkAccessControl`
     *     * Replace the environment's current `WebServerNetworkAccessControl`.
     * * `config.databaseConfig`
     *     * Replace the environment's current `DatabaseConfig`.
     * * `config.webServerConfig`
     *     * Replace the environment's current `WebServerConfig`.
     * * `config.softwareConfig.airflowConfigOverrides`
     *     * Replace all Apache Airflow config overrides. If a replacement config
     *       overrides map is not included in `environment`, all config overrides
     *       are cleared.
     *       It is an error to provide both this mask and a mask specifying one or
     *       more individual config overrides.
     * * `config.softwareConfig.airflowConfigOverrides.`section-name
     *     * Override the Apache Airflow config property *name* in the
     *       section named *section*, preserving other properties. To
     *       delete the property override, include it in `updateMask` and omit its
     *       mapping in
     *       `environment.config.softwareConfig.airflowConfigOverrides`.
     *       It is an error to provide both a mask of this form and the
     *       `config.softwareConfig.airflowConfigOverrides` mask.
     * * `config.softwareConfig.envVariables`
     *     * Replace all environment variables. If a replacement environment
     *       variable map is not included in `environment`, all custom environment
     *       variables  are cleared.
     *       It is an error to provide both this mask and a mask specifying one or
     *       more individual environment variables.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

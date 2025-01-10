<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/mitre_attack.proto

namespace Google\Cloud\SecurityCenter\V1\MitreAttack;

use UnexpectedValueException;

/**
 * MITRE ATT&CK tactics that can be referenced by SCC findings.
 * See: https://attack.mitre.org/tactics/enterprise/
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.MitreAttack.Tactic</code>
 */
class Tactic
{
    /**
     * Unspecified value.
     *
     * Generated from protobuf enum <code>TACTIC_UNSPECIFIED = 0;</code>
     */
    const TACTIC_UNSPECIFIED = 0;
    /**
     * TA0043
     *
     * Generated from protobuf enum <code>RECONNAISSANCE = 1;</code>
     */
    const RECONNAISSANCE = 1;
    /**
     * TA0042
     *
     * Generated from protobuf enum <code>RESOURCE_DEVELOPMENT = 2;</code>
     */
    const RESOURCE_DEVELOPMENT = 2;
    /**
     * TA0001
     *
     * Generated from protobuf enum <code>INITIAL_ACCESS = 5;</code>
     */
    const INITIAL_ACCESS = 5;
    /**
     * TA0002
     *
     * Generated from protobuf enum <code>EXECUTION = 3;</code>
     */
    const EXECUTION = 3;
    /**
     * TA0003
     *
     * Generated from protobuf enum <code>PERSISTENCE = 6;</code>
     */
    const PERSISTENCE = 6;
    /**
     * TA0004
     *
     * Generated from protobuf enum <code>PRIVILEGE_ESCALATION = 8;</code>
     */
    const PRIVILEGE_ESCALATION = 8;
    /**
     * TA0005
     *
     * Generated from protobuf enum <code>DEFENSE_EVASION = 7;</code>
     */
    const DEFENSE_EVASION = 7;
    /**
     * TA0006
     *
     * Generated from protobuf enum <code>CREDENTIAL_ACCESS = 9;</code>
     */
    const CREDENTIAL_ACCESS = 9;
    /**
     * TA0007
     *
     * Generated from protobuf enum <code>DISCOVERY = 10;</code>
     */
    const DISCOVERY = 10;
    /**
     * TA0008
     *
     * Generated from protobuf enum <code>LATERAL_MOVEMENT = 11;</code>
     */
    const LATERAL_MOVEMENT = 11;
    /**
     * TA0009
     *
     * Generated from protobuf enum <code>COLLECTION = 12;</code>
     */
    const COLLECTION = 12;
    /**
     * TA0011
     *
     * Generated from protobuf enum <code>COMMAND_AND_CONTROL = 4;</code>
     */
    const COMMAND_AND_CONTROL = 4;
    /**
     * TA0010
     *
     * Generated from protobuf enum <code>EXFILTRATION = 13;</code>
     */
    const EXFILTRATION = 13;
    /**
     * TA0040
     *
     * Generated from protobuf enum <code>IMPACT = 14;</code>
     */
    const IMPACT = 14;

    private static $valueToName = [
        self::TACTIC_UNSPECIFIED => 'TACTIC_UNSPECIFIED',
        self::RECONNAISSANCE => 'RECONNAISSANCE',
        self::RESOURCE_DEVELOPMENT => 'RESOURCE_DEVELOPMENT',
        self::INITIAL_ACCESS => 'INITIAL_ACCESS',
        self::EXECUTION => 'EXECUTION',
        self::PERSISTENCE => 'PERSISTENCE',
        self::PRIVILEGE_ESCALATION => 'PRIVILEGE_ESCALATION',
        self::DEFENSE_EVASION => 'DEFENSE_EVASION',
        self::CREDENTIAL_ACCESS => 'CREDENTIAL_ACCESS',
        self::DISCOVERY => 'DISCOVERY',
        self::LATERAL_MOVEMENT => 'LATERAL_MOVEMENT',
        self::COLLECTION => 'COLLECTION',
        self::COMMAND_AND_CONTROL => 'COMMAND_AND_CONTROL',
        self::EXFILTRATION => 'EXFILTRATION',
        self::IMPACT => 'IMPACT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}



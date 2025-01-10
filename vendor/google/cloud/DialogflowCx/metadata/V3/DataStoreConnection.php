<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/data_store_connection.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\Cx\V3;

class DataStoreConnection
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/dialogflow/cx/v3/data_store_connection.protogoogle.cloud.dialogflow.cx.v3"p
DataStoreConnectionE
data_store_type (2,.google.cloud.dialogflow.cx.v3.DataStoreType

data_store (	"�
DataStoreConnectionSignals|
rewriter_model_call_signals (2R.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.RewriterModelCallSignalsB�A
rewritten_query (	B�Ae
search_snippets (2G.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SearchSnippetB�A�
$answer_generation_model_call_signals (2Z.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.AnswerGenerationModelCallSignalsB�A
answer (	B�A_
answer_parts (2D.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.AnswerPartB�Ac
cited_snippets (2F.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.CitedSnippetB�Aj
grounding_signals (2J.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.GroundingSignalsB�Ad
safety_signals	 (2G.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignalsB�AX
RewriterModelCallSignals
rendered_prompt (	
model_output (	
model (	K
SearchSnippet
document_title (	
document_uri (	
text (	`
 AnswerGenerationModelCallSignals
rendered_prompt (	
model_output (	
model (	6

AnswerPart
text (	
supporting_indices (�
CitedSnippet_
search_snippet (2G.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SearchSnippet
snippet_index (�
GroundingSignalsn
decision (2\\.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.GroundingSignals.GroundingDecisionn
score (2_.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.GroundingSignals.GroundingScoreBucket"m
GroundingDecision"
GROUNDING_DECISION_UNSPECIFIED 
ACCEPTED_BY_GROUNDING
REJECTED_BY_GROUNDING"z
GroundingScoreBucket&
"GROUNDING_SCORE_BUCKET_UNSPECIFIED 
VERY_LOW
LOW

MEDIUM
HIGH
	VERY_HIGH�
SafetySignalsh
decision (2V.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.SafetyDecisionv
banned_phrase_match (2Y.google.cloud.dialogflow.cx.v3.DataStoreConnectionSignals.SafetySignals.BannedPhraseMatch
matched_banned_phrase (	"m
SafetyDecision
SAFETY_DECISION_UNSPECIFIED 
ACCEPTED_BY_SAFETY_CHECK
REJECTED_BY_SAFETY_CHECK"�
BannedPhraseMatch#
BANNED_PHRASE_MATCH_UNSPECIFIED 
BANNED_PHRASE_MATCH_NONE
BANNED_PHRASE_MATCH_QUERY 
BANNED_PHRASE_MATCH_RESPONSE*b
DataStoreType
DATA_STORE_TYPE_UNSPECIFIED 

PUBLIC_WEB
UNSTRUCTURED

STRUCTUREDB�
!com.google.cloud.dialogflow.cx.v3BDataStoreConnectionProtoPZ1cloud.google.com/go/dialogflow/cx/apiv3/cxpb;cxpb��DF�Google.Cloud.Dialogflow.Cx.V3�!Google::Cloud::Dialogflow::CX::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

